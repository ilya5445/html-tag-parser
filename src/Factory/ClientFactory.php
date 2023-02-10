<?php

namespace Ilya5445\HtmlTagParser\Factory;

use GuzzleHttp\Client;
use Psr\Http\Client\ClientInterface;

class ClientFactory {
    
    /**
     * @return ClientInterface
     */
    public static function create(): ClientInterface {
        return new Client([
            'verify' => false
        ]);
    }

}
