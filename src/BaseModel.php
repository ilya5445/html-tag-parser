<?php

namespace Ilya5445\HtmlTagParser;

abstract class BaseModel {

    protected static $map = [];

    public function map($data) {
        foreach (static::$map as $key => $item) {
            if (isset($data[$key]) && (!is_array($data[$key]) || (is_array($data[$key]) && !empty($data[$key])))) {
                $method = 'set' . self::toCamelCase($key);
                if ($item === true) {
                    $this->$method($data[$key]);
                } else {
                    $this->$method($item::fromResponse($data[$key]));
                }
            }
        }
    }

    protected static function toCamelCase($str) {
        return str_replace(" ", "", ucwords(str_replace("_", " ", $str)));
    }

    public static function fromResponse($data) {
        if ($data === true) {
            return true;
        }
        
        $instance = new static();
        $instance->map($data);

        return $instance;
    }
}
