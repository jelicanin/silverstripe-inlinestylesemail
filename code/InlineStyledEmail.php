<?php

class InlineStyledEmail extends Email {

	protected $css = null;

	/**
	 * @param $isPlain
	 */
	protected function parseVariables($isPlain = false) {
		parent::parseVariables($isPlain);
		$this->body = InlineStyler::convert($this->body, $this->css);
	}

	/**
	 * @param $css
	 */
	function setCSS($css) {
		$this->css = $css;
	}

}