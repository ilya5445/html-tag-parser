<?php

namespace Ilya5445\HtmlTagParser\Model;

use Ilya5445\HtmlTagParser\BaseModel;

class Tag extends BaseModel {

    protected $name;
    protected $count;

    static protected $map = [
        'name' => true,
        'count' => true
    ];

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    public function getCount() {
        return $this->count;
    }

    public function setCount($count) {
        $this->count = $count;

        return $this;
    }
}
