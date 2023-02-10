<?php

use Ilya5445\HtmlTagParser\Factory\RequestFactory;
use Ilya5445\HtmlTagParser\HtmlParser;

require_once "../vendor/autoload.php";

$request = RequestFactory::create('https://a3f.ru/1');
$parser = new HtmlParser($request);
$tags = $parser->parse()->tags();
$tags_count = $tags->count();
$tags_stats = $tags->stats();
$tags_stats_count = $tags_stats->count();

print_r($tags_count);
print_r($tags_stats);
print_r($tags_stats_count);