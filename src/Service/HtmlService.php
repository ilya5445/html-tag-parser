<?php

namespace Ilya5445\HtmlTagParser\Service;

use Exception;
use Ilya5445\HtmlTagParser\Model\Tags;

class HtmlService implements ServiceInterface {

    private $html;

    function __construct(string $html) {
        $this->html = $html;
    }

    public function tags() {

        preg_match_all('/(?<=<)\w+(?=[^<]*?>)/i', $this->html, $rawData);

        if (!isset($rawData[0]) || empty($rawData[0])) throw new Exception('Array empty');

        return Tags::fromResponse([
            'items' => $rawData[0]
        ]);
    }
    
}
