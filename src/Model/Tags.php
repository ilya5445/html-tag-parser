<?php

namespace Ilya5445\HtmlTagParser\Model;

use Ilya5445\HtmlTagParser\BaseModel;

class Tags extends BaseModel {

    protected $items;

    static protected $map = [
        'items' => ArrayOfTag::class
    ];

    public function setItems(array $items) {
        $this->items = $items;

        return $this;
    }

    /**
     * @return integer
     */
    public function count(): int {
        return count($this->items);
    }

    public function stats(): Tags {

        $stats = [];

        if (!empty($this->items)) foreach ($this->items as $tag) {

            if (!isset($stats[$tag->getName()])) 
                $stats[$tag->getName()] = [
                    'name' => $tag->getName(),
                    'count' => 1
                ];
            else $stats[$tag->getName()]['count']++;
        }

        return self::fromResponse(['items' => $stats]);
    }

}