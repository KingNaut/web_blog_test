<?php

namespace App\Libs;

use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;

class Request
{

    public static function sendPost(string $url, array $body, array $headers=[]): array
    {
        try {

            $options = [
                'connect_timeout' => 120,
                'timeout' => 10,
                'http_errors' => false
            ];

            $client = new Client($options);

            $response = $client->request('POST', $url, [
                'form_params' => $body,
                'headers' => $headers
            ]);

            $status =  $response->getStatusCode();
            $body = (string)$response->getBody();

            return [
                'status' => $status,
                'body' => json_decode($body)
            ];
        } catch(RequestException $e) {

            Log::error("error_request_post",$e->getMessage());
            return [
                'status' => 21,
                'body' => 'Có lỗi xảy ra trong quá trình xử lý'
            ];
        } catch(ConnectException $e) {

            Log::error("error_connect_requet_post", $e->getMessage());
            return [
                'status' => 21,
                'body' => 'Có lỗi xảy ra trong quá trình xử lý'
            ];
        }
    }

    public static function sendPostFormData(string $url, array $body, array $headers=[]): array
    {
        try {

            $options = [
                'connect_timeout' => 120,
                'timeout' => 10,
                'http_errors' => false
            ];

            $client = new Client($options);

            $response = $client->request('POST', $url, [
                'multipart' => $body,
                'headers' => $headers
            ]);

            $status =  $response->getStatusCode();
            $body = (string)$response->getBody();

            return [
                'status' => $status,
                'body' => json_decode($body)
            ];
        } catch(RequestException $e) {

            Log::error("error_request_postForm", $e->getMessage());
            return [
                'status' => 21,
                'body' => 'Có lỗi xảy ra trong quá trình xử lý'
            ];
        } catch(ConnectException $e) {

            Log::error("error_connect_request_postForm", $e->getMessage());
            return [
                'status' => 21,
                'body' => 'Có lỗi xảy ra trong quá trình xử lý'
            ];
        }
    }


    public static function sendGet(string $url, array $body): array
    {
        try {

            $options = [
                'connect_timeout' => 120,
                'timeout' => 10,
                'http_errors' => false
            ];
            $client = new Client($options);

            $response = $client->request('GET', $url, [
                'query' => http_build_query($body)
            ]);

            $status = $response->getStatusCode();
            $body = (string)$response->getBody();



            return [
                'status' => $status,
                'body' => json_decode($body)
            ];
        } catch(RequestException $e) {

            Log::error($e->getMessage());
            return [
                'status' => 21,
                'body' => 'Có lỗi xảy ra trong quá trình xử lý'
            ];
        } catch(ConnectException $e) {

            Log::error($e->getMessage());
            return [
                'status' => 21,
                'body' => 'Có lỗi xảy ra trong quá trình xử lý'
            ];
        }
    }
}