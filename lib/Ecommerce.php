<?php 
namespace DotSquare;

class Ecommerce {
    use ApiOperations\ApiRequestor;

    public static function getCart($data) {
        $dir='ecommerce/getCart/';
        $response = \DotSquare\Ecommerce::post($dir, $data);
        return $response;
    }
    public static function getCartTotals($data) {
        $dir='ecommerce/getCartTotals/';
        $response = \DotSquare\Ecommerce::post($dir, $data);
        return $response;
    }
    public static function createCartInvoice($data) {
        $dir='ecommerce/createCartInvoice/';
        $response = \DotSquare\Ecommerce::post($dir, $data);
        return $response;
    }
}