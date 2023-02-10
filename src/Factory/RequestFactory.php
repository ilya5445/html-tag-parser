<?php

namespace Ilya5445\HtmlTagParser\Factory;

use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;

class RequestFactory {
    
    /**
     * @param string $url
     * @param string $method
     * @param array $headers
     * @return RequestInterface
     */
    public static function create(string $url, string $method = 'GET', array $headers = []): RequestInterface {
        return new Request($method, $url, $headers);
    }

}
