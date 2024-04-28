<?php
declare(strict_types=1);

require '../vendor/autoload.php';

abstract class Checkout {
    abstract public function pay($payment): array;
}

class PaypalChecout extends Checkout {
    public function pay($payment): array {
        return [
            'Paypal payment' => $payment
        ];
    }
}

class PagseguroCheckout extends Checkout {
    public function pay($payment): array {
        return [
            'Pagseguro payment' => $payment
        ];
    }
}


$payment = new PaypalChecout;
$payment->pay(120);
foreach ($payment as $key => $value) {
    echo $key. ': '. $value. '<br>';
}