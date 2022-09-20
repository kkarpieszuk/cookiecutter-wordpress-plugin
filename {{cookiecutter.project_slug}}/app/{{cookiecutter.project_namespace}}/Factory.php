<?php

namespace {{cookiecutter.project_namespace}};

class Factory {

	/**
	 * @var CliCommands|null
	 */
	private static $cliCommands;

	/**
	 * @var Shortcode|null
	 */
	private static $shortcode;

	/**
	 * @var Ajax|null
	 */
	private static $ajax;

	/**
	 * @return Ajax
	 */
	public function createAjax() {
		if ( ! self::$ajax ) {
			self::$ajax = new Ajax();
		}
		return self::$ajax;
	}

	/**
	 * @return Shortcode
	 */
	public function createShortcode() {
		if ( ! self::$shortcode ) {
			self::$shortcode = new Shortcode();
		}
		return self::$shortcode;
	}

	/**
	 * @return CliCommands
	 */
	public function createCliCommands() {
		if ( ! self::$cliCommands ) {
			self::$cliCommands = new CliCommands( $this->createPeoplePostType() );
		}
		return self::$cliCommands;
	}
}
