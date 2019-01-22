<?php

namespace Daguilar\PhpSimple;

require 'SimpleHtmlDom'.DIRECTORY_SEPARATOR.'simple_html_dom.php';

class HtmlDomParser {

	/**
	 * @return \SimpleHtmlDom\simple_html_dom
	 */
	static public function file_get_html() {
		return call_user_func_array ( '\SimpleHtmlDom\file_get_html' , func_get_args() );
	}

	/**
	 * get html dom from string
	 * @return \SimpleHtmlDom\simple_html_dom
	 */
	static public function str_get_html() {
		return call_user_func_array ( '\SimpleHtmlDom\str_get_html' , func_get_args() );
	}
}
