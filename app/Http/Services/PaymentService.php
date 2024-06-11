<?php

namespace App\Http\Services;


class PaymentService
{

    private $conn;

    public function __construct() {

        $this->conn = 'http'.(env('BTC_SERVER_USE_SSL')?'s':'').'://'.env('BTC_SERVER_USER').':'.env('BTC_SERVER_PASSWORD').'@'.env('BTC_SERVER_HOST').':'.env('BTC_SERVER_PORT').'/';

    }

    public function __call($method, $params) {
        $data = array(
            'method' => $method,
            'params' => array_values($params),
            'id' => $method
        );

        $options = array(
            'http' => array(
                'method'  => 'POST',
                'header'  => 'Content-type: application/json',
                'content' => json_encode($data)
            )
        );


        $context = stream_context_create($options);
        if ($response = file_get_contents($this->conn, false, $context)) {
            $return = json_decode($response, true);
            return $return['result'];
        }
        else return null;

    }

}