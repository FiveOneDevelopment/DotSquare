<?php 
namespace DotSquare;

class Email {
    use ApiOperations\ApiRequestor;

    public static function sendEmail($data) {
        $dir='email/sendEmail/';
        $response = \DotSquare\Email::post($dir, $data);
        return $response;
    }
}