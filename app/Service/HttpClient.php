<?php

namespace App\Service;

use App\Service\contracts\IHttpClient;
use Illuminate\Support\Facades\Http;

class HttpClient implements IHttpClient
{
    public function post($url, $data, $token = null)
    {

        if($token == null){
            return Http::post($url, $data);
        }
        return Http::withToken($token)->withoutVerifying()->withOptions(["verify"=>false])->post($url, $data);
    }

    public function get($url, $token = null)
    {
        if($token == null){
            return Http::get($url)->body();
        }
        return Http::withToken($token)->withoutVerifying()->withOptions(["verify"=>false])->get($url)->body();
    }

}
