<?php
declare(strict_types=1);

require '../vendor/autoload.php';

abstract class Checkout {
    abstract public function pay($payment): array;
}

class PaypalCheckout extends Checkout {
    public function pay($payment): array {
        return [
            'PaypalCheckout payment' => $payment
        ];
    }
}

class PagseguroCheckout extends Checkout {

    public function pay($payment): array {
        return [
            'PagseguroCheckout payment' => $payment
        ];
    }
}

$paypal = new PaypalCheckout;
$paypal->pay(120);

$pagseguro = new PagseguroCheckout;
$pagseguro->pay(150);