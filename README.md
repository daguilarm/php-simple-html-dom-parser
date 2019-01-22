php-simple-html-dom-parser
==========================

Version 2.0 (Updated to PHP 7.1, 7.2 and 7.3)

Adaptation for Composer and PSR-0 of:

A HTML DOM parser written in PHP5+ let you manipulate HTML in a very easy way!
Require PHP 5+.
Supports invalid HTML.
Find tags on an HTML page with selectors just like jQuery.
Extract contents from HTML in a single line.

http://simplehtmldom.sourceforge.net/


Install
-------

 composer.phar
```json
"require": {
    "daguilarm/php-simple-html-dom-parser": "2.0"
    }
```

Usage
-----

```php
use Sunra\PhpSimple\HtmlDomParser;

...
$dom = HtmlDomParser::str_get_html( $str );
or 
$dom = HtmlDomParser::file_get_html( $file_name );

$elems = $dom->find($elem_name);
...

```
