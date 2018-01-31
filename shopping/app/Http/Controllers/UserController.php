<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class UserController extends Controller
{

    public function getRegister() {
        return view('user.register');
    }

    public function postRegister(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4',
            'address1' => 'required',
            'address2' => 'required',
            'city' => 'required',
            'county' => 'required',
            'postal_code' => 'required',

        ]);

        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'address1' => $request->input('address1'),
            'address2' => $request->input('address2'),
            'city' => $request->input('city'),
            'county' => $request->input('county'),
            'postal_code' => $request->input('postal_code'),

        ]);

        $user->save();

        auth()->login($user);

        return redirect()->route('product.index');
    }

    public function getLogin() {
        return view('user.login');
    }

    public function postLogin(Request $request) {
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect()->route('user.profile');
        }
        return redirect()->back();
    }

    public function Profile() {
        $orders = Auth::user()->orders;
        $orders->transform(function ($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('user.profile', ['orders' => $orders]);
    }

    public function Logout() {
        Auth::logout();

        return redirect()->route('product.index');
    }
}
