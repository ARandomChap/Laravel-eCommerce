<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Order;

use Illuminate\Http\Request;
use Auth;
use League\Flysystem\Exception;
use Session;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Token;

class ProductController extends Controller
{
    public function getHome() {
        return view ('shop.home');
    }

    public function getIndex()
    {
        $products = Product::all();
        return view ('shop.index', ['products' => $products]);
    }

    public function create () {
        return view ('shop.create');
    }

    public function show ($id){

        $product = Product::find($id);
        return view ('shop.show', compact('product'));
    }

    public function store (Request $request)
    {
//        $product = new Product;
//
//
//        $product->title = request('title');
//        $product->price = request('price');
//        $product->description = request('description');
//        $product->imagePath = request('imagePath');
//
//        $product->save();



        $description = htmlspecialchars($request->input('description'));
        $title = htmlspecialchars($request->input('title'));
        $price = $request->input('price');


        $imagePath = $request->imagePath->store('images', 'test');

        $this->validate(request(), [
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
            'imagePath' => 'required'
        ]);

//        Product::create($request->all());

//        auth()->user()->publish(
        $product = new Product(compact('title', 'description', 'price','imagePath'
        ));

        $product->save();


        return redirect('/');

    }

    public function addToCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('product.index');
    }

    public function getReduceByOne($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('product.shoppingCart');
    }

    public function getRemoveItem ($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('product.shoppingCart');
    }

    public function getCart() {
        if(!Session::has('cart')) {
            return view('shop.shopping-cart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout()
    {
        if(!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request)
    {
        if(!Session::has('cart')) {
            return redirect()->route('shop.shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);


// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
        Stripe::setApiKey("api key need to be set");

// Token is created using Stripe.js or Checkout!
// Get the payment token submitted by the form:
        $token = $_POST['stripeToken'];

// Charge the user's card:
        $charge = Charge::create(array(
            "amount" => $cart->totalPrice * 100,
            "currency" => "gbp",
            "description" => "Example charge",
            "source" => $token,
        ));

        $order = new Order();
        $order->cart = serialize($cart);
//        $order->address = $request-input('address');
        $order->name = Auth::user()->name;
        $order->payment_id = $charge->id;

        Auth::user()->orders()->save($order);

//        try{
//            Charge::create(array(
//                "amount" => 2000,
//                "currency" => "gbp",
//                "source" => $request->input('tok_ need token'),
//                "metadata" => array("order_id" => "6735")
//            ));

//            (
//                "amount" => $cart->totalPrice * 100,
//                "currency" => "gbp",
//                "source" => $request->input('stripeToken'), // obtained with Stripe.js
//                "description" => "Test for: ", //, Auth::user()->name
//            ));
//        } catch (\Exception $e) {
//            return redirect()->route('checkout')->with('error', $e->getMessage());
//        }

        Session::forget('cart');
        return redirect()->route('product.index')->with('success', 'Your order has been proccessed, Thank You for shopping with us!');
    }
}
