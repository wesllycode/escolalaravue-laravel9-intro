<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use MercadoPago;

class PaymentController extends Controller
{

	public function index() {

        \MercadoPago\SDK::setAccessToken(config('services.mercadopago.token')); // Either Production or SandBox AccessToken

        $payment = new MercadoPago\Payment();

        $payment->transaction_amount = "10";
        $payment->description = "Plano 24 horas";
        $payment->payment_method_id = "pix";
        $payment->payer = array(
            "email" => "test_user_75171799@testuser.com",
            "first_name" => "Test",
            "last_name" => "Test",
            "identification" => array(
                "type" => "CPF",
                "number" => "11111111111"
            )
        );

        if ($payment->save()) {
            $dados = [
                'qr_code_base64' => $payment->point_of_interaction->transaction_data->qr_code_base64,
                'qr_code' => $payment->point_of_interaction->transaction_data->qr_code,
                'payment_id' => $payment->id,
                'valor' => '10',
                'produto' => 'Plano 24 horas'

            ];
            return response()->json([$dados]);
        }

    }

    public function status(Request $request) {
        \MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));
         $payment = new MercadoPago\Payment();

         $id = $request->input('id');

         return response()->json([$payment->get($id)->status]);

    }

    public function receberdados(Request $request) {
        dd($request);
    }



}
