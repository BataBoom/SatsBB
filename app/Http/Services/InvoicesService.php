<?php

namespace App\Http\Services;

use Cache;

class InvoicesService
{

    public static function getAmountInCoin(\App\WalletService $wallet, $usd)
    {
        $uri = str_replace("{{coin}}", strtolower($wallet->short_code), env('COIN_API_URI'));
        $json = @file_get_contents($uri);
        if(!$json) {
            if(Cache::get('currencies') !== null) {
                $json = Cache::get('currencies');
            }
            else {
                $json = @file_get_contents('https://paxful.com/rest/v1/calculator/currency?camelCase=1');
                $json_array = @json_decode($json);
                $currency = 20975;
                if($json_array) {
                    foreach ($json_array->data->currencies as $k => $item) {
                        if(property_exists($item, 'code') && $item->code === "USD") {
                           $currency = $item->rate->btc;
			//	$currency = 40343;
                            break;
                        }
                    }
                }

               $coin_price = 1 / $currency * $usd;
                return $coin_price;
            }
        }

        $json_array = json_decode($json);
        if (json_last_error() != 0) {
            return abort(500);
        }
 
       $coin_price = 1 / $json_array->ticker->price * $usd;
        return $coin_price;
    }
}

