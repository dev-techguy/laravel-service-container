<?php


namespace App\Payments;


class BankPayment
{

    /**
     * @var string
     */
    private $method;

    public function __construct(string $method)
    {
        $this->method = $method;
    }

    public function setDiscount(float $discount)
    {
        return $discount;
    }

    public function pay(float $amount)
    {
        return [
            'name' => 'Vincent',
            'amount' => number_format($amount, 2)
        ];
    }
}
