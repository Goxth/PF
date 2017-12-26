<?php

namespace App\Http\Controllers;
use App\Orden;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    public function shipping(){
    	return view('skltn.ship');
    }

    public function pago(){
        return view('skltn.pago');
    }

    public function storePago(Request $request){
        
\Stripe\Stripe::setApiKey("sk_test_vYwXDn2KjW5SSrU29Z27Nl39");


$token = $request->stripeToken;

try{
$charge = \Stripe\Charge::create(array(
  "amount" => Cart::total()*100,
  "currency" => "usd",
  "description" => "Example charge",
  "source" => $token,
));
    } catch (\Stripe\Error\Card $e){
    
    }
    Orden::crearOrden();


    return "Orden Completada";
    }

}