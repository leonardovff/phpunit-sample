<?php

namespace WSCPROJECT\Utils;

class UserAgent
{
    static function makeRequest($url, $method) {
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_PORT => "80",
          CURLOPT_URL => "localhost/{$url}",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => $method,
          CURLOPT_HTTPHEADER => array(
            "authorization: @token",
            "cache-control: no-cache"
          ),
        ));
        
        $response = curl_exec($curl);
        $response = json_decode($response, true);
        
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return null;
        }
        return $response;
    }
}