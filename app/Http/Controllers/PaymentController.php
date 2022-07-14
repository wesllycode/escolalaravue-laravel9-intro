<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use MercadoPago;

class PaymentController extends Controller
{
 
   
    
	public function pagamento() {
		return 'controller pagamento';
	}
	
	
	public function index() {

        \MercadoPago\SDK::setAccessToken(""); // Either Production or SandBox AccessToken

        $payment = new MercadoPago\Payment();

        $payment->transaction_amount = "10";
		$payment->description = "Plano 24 horas";
		$payment->payment_method_id = "pix";
		$payment->payer = array(
			"email" => "seu@email.com",
			"first_name" => "Seu",
			"last_name" => "Nome",
			"identification" => array(
				"type" => "CPF",
				"number" => "19119119100"
			)
		);

            

        // dd($payment);
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

    public function statuspayments($id) {

        \MercadoPago\SDk::setAccessToken('');

            $payment = new MercadoPago\Payment();
            return response()->json([$payment->get($id)->status]);       
        
    }
       
}