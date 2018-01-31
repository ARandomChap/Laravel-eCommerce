//
// var $form =$('#checkout-form');
//
// $form.submit(function(event){
//     $('#charge-error').addClass('hidden');
//     $form.find('button').prop('disabled', true);
//
//     Stripe.card.createToken({
//         number: $('#card-number').val(),
//         cvc: $('#card-cvc').val(),
//         exp_month: $('#card-expiry-month').val(),
//         exp_year: $('#card-expiry-year').val(),
//         name: $('#card-name').val()
//     }, stripeResponseHandler);
//
//     return false;
// });
//
// function stripeResponseHandler(status, response) {
//     if (response.error) {
//         $('#charge-error').removeClass('hidden');
//         $('#charge-error').text(response.error.message);
//         $form.find('button').prop('disabled', false);
//     } else {
//         var token = response.id;
//
//         // Insert the token into the form so it gets submitted to the server:
//         $form.append($('<input type="hidden" name="stripeToken" />').val(token));
//
//         // Submit the form:
//         $form.get(0).submit();
//     }
// }


var stripe = Stripe('pk_test_VsQyC48N6GENblRsJBPH1IUc');
var elements = stripe.elements();

var card = elements.create('card');

// Add an instance of the card UI component into the `card-element` <div>
card.mount('#card-element');

// Create a token or display an error the form is submitted.
var form = document.getElementById('payment-form');
if(form){
form.addEventListener('submit', function(event) {
    event.preventDefault();

    stripe.createToken(card).then(function(result) {
        if (result.error) {
            // Inform the user if there was an error
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
        } else {
            // Send the token to your server
            stripeTokenHandler(result.token);
        }

        var card = elements.create('card');
    });

    function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        window.location.href = "myphpfile.php?name=" + token;


        // Submit the form
        form.submit();
    }

});}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// var $form = $('#checkout-form');
//
// $form.submit(function(event) {
//     $('#charge-errors').addClass('hidden');
//     $form.find('button').prop('disabled', true);
//     Stripe.card.createToken({
//         number: $('#card-number').val(),
//         cvc: $('#card-cvc').val(),
//         exp_month: $('#card-expiry-month').val(),
//         exp_year: $('#card-expiry-year').val(),
//         name: $('#card-name').val()
//
//     }, stripeResponseHandler);
//     return false;
// });
//
// // var stripe = Stripe('pk_test_VsQyC48N6GENblRsJBPH1IUc');
// // var elements = stripe.elements();
// //
// // var card = elements.create('card');
// // card.mount('#card-element');
// //
// // var promise = stripe.createToken(card);
// // promise.then(function(result) {
// //     // result.token is the card token.
// //
// //     console.log($token);
// //     dd(result.token);
// // });
//
// function stripeResponseHandler(status, response) {
//
//     // Grab the form:
//     var $form = $('#payment-form');
//
//     if (response.error) { // Problem!
//
//         $('#charge-error').removeClass('hidden');
//         $('#charge-error').text(response.error.message);
//         $form.find('button').prop('disabled', false);
//     } else { // Token was created!
//
//         // Get the token ID:
//         var token = response.id;
//
//         // Insert the token into the form so it gets submitted to the server:
//         $form.append($('<input type="hidden" name="stripeToken" />').val(token));
//
//         // Submit the form:
//         $form.get(0).submit();
//
//     }
// }
//
// // function stripeResponseHandler(status, response) {
// //     if (response.error) { // Problem!
// //
// //         // Show the errors on the form
// //         $('#charge-errors').text(response.error.message);
// //         $('#charge-errors').removeClass('hidden');
// //         $form.find('button').prop('disabled', false); // Re-enable submission
// //
// //     } else { // Token was created!
// //
// //         // Get the token ID:
// //         var token = response.id;
// //
// //         // Insert the token into the form so it gets submitted to the server:
// //         $form.append($('<input type="hidden" name="stripeToken" />').val(token));
// //
// //         // Submit the form:
// //         $form.get(0).submit();
// //     }
// // };