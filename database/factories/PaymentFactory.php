<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_mp' => $this->faker->randomNumber(),
            'user_id' => $this->faker->numberBetween(1,5),
            'date_created' => $this->faker->dateTime('now','America/Sao_Paulo'),
            'date_approved' => $this->faker->dateTime('now','America/Sao_Paulo'),
            'date_last_updated' => $this->faker->dateTime('now','America/Sao_Paulo'),
            'payment_method_id' => $this->faker->randomElement(['Visa', 'Mastercard', 'Elo']),
            'payment_type_id' => $this->faker->randomElement(['credit_card','debit_card','account_money']),
            'payment_id'=> $this->faker->randomDigit(),
            'status' => $this->faker->randomElement(['pending', 'approved', 'authorized', 'in_process','in_mediation','rejected', 'cancelled','refunded','charged_bank']),
            'status_detail' => $this->faker->randomElement([
                'Accredited',
                'pending_contingency',
                'pending_review_manual',
                'cc_rejected_bad_filled_date',
                'cc_rejected_bad_filled_other',
                'cc_rejected_bad_filled_security_code',
                'cc_rejected_blacklist',
                'cc_rejected_call_for_authorize',
                'cc_rejected_card_disabled',
                'cc_rejected_duplicated_payment',
                'cc_rejected_high_risk',
                'cc_rejected_insufficient_amount',
                'cc_rejected_invalid_installments',
                'cc_rejected_max_attempts',
                'cc_rejected_other_reason',
            ]),
            'currency_id' =>$this->faker->randomElement(['BRL', 'ARS', 'MXN', 'CLP']),
            'description' => 'Acesso por 24 horas de Internet',
            'unit_price' => '20.00',
            'clienthotspot_id'=> $this->faker->randomElement(['ATM Telecom','WebFix Telefom', 'OnlineTelecom','BrisaLink']),

        ];
    }
}
