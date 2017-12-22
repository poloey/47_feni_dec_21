<?php
namespace App\Libraries;

use Sunra\PhpSimple\HtmlDomParser;


class Helpers {
  public static function excerpt($content, $limit = 200) {
    $dom = HtmlDomParser::str_get_html( $content );
    $excerpt = str_limit( $dom->plaintext, $limit);
    return $excerpt;
  }
}