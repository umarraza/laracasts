<?php

namespace App\Services;

class Twitter {

    public  $apiKey;
    public  $apiSecret;

    public function __construct($apiKey, $apiSecret) {
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
    }

}

