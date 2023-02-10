<?php

namespace Ilya5445\HtmlTagParser\Factory;

use Ilya5445\HtmlTagParser\Service\HtmlService;
use Ilya5445\HtmlTagParser\Service\ServiceInterface;

class HtmlFactory {

    /**
     * @param string $html
     * @return ServiceInterface
     */
    public static function create(string $html): ServiceInterface {
        return new HtmlService($html);
    }
    
}
