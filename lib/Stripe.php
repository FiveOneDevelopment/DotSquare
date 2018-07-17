<?php 
namespace DotSquare;

class Stripe {
    use ApiOperations\ApiRequestor;
    
    // CUSTOMERS
    public static function stripeCustCreate($data) {
        $dir='stripe/custCreate/';
        $response = \DotSquare\Stripe::post($dir, $data);
        return $response;
    }
    public static function stripeCustCardCreate($data) {
        $dir='stripe/custCardCreate/';
        $response = \DotSquare\Stripe::post($dir, $data);
        return $response;
    }
    public static function stripeCustCharge($data) {
        $dir='stripe/custCharge/';
        $response = \DotSquare\Stripe::post($dir, $data);
        return $response;
    }
    
    // CARDS
    public static function stripeCardRetrieve($data) {
        $dir='stripe/CardRetrieve/';
        $response = \DotSquare\Stripe::post($dir, $data);
        return $response;
    }
    public static function stripeCardUpdateDefault($data) {
        $dir='stripe/cardUpdateDefault/';
        $response = \DotSquare\Stripe::post($dir, $data);
        return $response;
    }
    public static function stripeCardDelete($data) {
        $dir='stripe/cardDelete/';
        $response = \DotSquare\Stripe::post($dir, $data);
        return $response;
    }

    // ACCOUNTS
    public static function stripeAccountCreate($data) {
        $dir='stripe/accountCreate/';
        $response = \DotSquare\Stripe::post($dir, $data);
        return $response;
    }
    public static function stripeAccountUpdate($data) {
        $dir='stripe/accountUpdate/';
        $response = \DotSquare\Stripe::post($dir, $data);
        return $response;
    }
    public static function stripeAccountDelete($data) {
        $dir='stripe/accountDelete/';
        $response = \DotSquare\Stripe::post($dir, $data);
        return $response;
    }
    public static function stripeAccountExternalAccountBaAdd($data) {
        $dir='stripe/accountExternalAccountBaAdd/';
        $response = \DotSquare\Stripe::post($dir, $data);
        return $response;
    }
    public static function stripeAccountExternalAccountBaDelete($data) {
        $dir='stripe/accountExternalAccountBaDelete/';
        $response = \DotSquare\Stripe::post($dir, $data);
        return $response;
    }
}