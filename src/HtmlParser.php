<?php

namespace Ilya5445\HtmlTagParser;

use Ilya5445\HtmlTagParser\Factory\ClientFactory;
use Ilya5445\HtmlTagParser\Factory\HtmlFactory;
use Ilya5445\HtmlTagParser\Factory\RequestFactory;

use Ilya5445\HtmlTagParser\Service\ServiceInterface;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;

class HtmlParser {

    protected $request;
    protected $client;
    
    /**
     * @param RequestInterface|string $request Url или Request PSR-7
     * @param ClientInterface|null $client Client PSR-7
     */
    function __construct(RequestInterface|string $request, ?ClientInterface $client = null) { 

        if (is_string($request)) $request = RequestFactory::create($request);
        if (is_null($client)) $client = ClientFactory::create();

        $this->request = $request;
        $this->client = $client;
    }

    /**
     * @return ServiceInterface
     */
    public function parse(): ServiceInterface {

        $response = $this->client->sendRequest($this->request);
        $html = $response->getBody()->getContents();

        return HtmlFactory::create($html);
    }

}
