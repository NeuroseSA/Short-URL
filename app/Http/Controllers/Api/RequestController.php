<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    private $apiUrl;
    private $apikey;
    private $endpoint;
    private $build;
    private $callback;

    public function __construct()
    {
        $this->apiUrl = "https://kutt.it/api/v2";
        $this->apikey = ['X-API-KEY: R~f_LzhsdaeyehqduCutSRsm0Owdh8UAECHj_l81']; 
    }

    public function getLinks()
    {
        $this->endpoint = "/links";
        $this->build = [
            "all" => true,
        ];

        $url = $this->apiUrl . $this->endpoint;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_URL, $url . "?" . http_build_query($this->build));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->apikey);
        $this->callback = json_decode(curl_exec($ch));
        curl_close($ch);
        $this->callback();
    }

    public function createShortUrl(Request $request)
    {
        $this->endpoint = "/links";

        $this->build = [
            "target" => $request->input("url"),
            "description" => "",
            "expire_in" => "2 days",
            "password" => "",
            "customurl" => "",
            "reuse" => false,
            "domain" => "",
        ];
        $this->post();
        $this->callback();
    }

    public function callback()
    {
        return  $this->callback;
    }

    private function post()
    {
        $url = $this->apiUrl . $this->endpoint;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($this->build));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->apikey);
        $this->callback = json_decode(curl_exec($ch));
        curl_close($ch);
    }
}
