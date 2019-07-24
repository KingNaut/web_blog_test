<?php


namespace App\Libs;


class Signature
{
    public static function createSignature(array $params, string $secretKey= ''): string
    {

        $secretKey = $secretKey ? $secretKey : env('SECRET_KEY_SIGNATURE');
        ksort($params);
        $implode = implode("", $params);

        return hash('sha256', $implode.$secretKey);
    }
}