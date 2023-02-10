<?php

namespace Ilya5445\HtmlTagParser\Model;

abstract class ArrayOfTag {
    
    public static function fromResponse($data) {

        $result = [];

        foreach ($data as $tag)
            $result[] = Tag::fromResponse(is_array($tag) ? $tag : ['name' => $tag]);

        return $result;
    }
}
