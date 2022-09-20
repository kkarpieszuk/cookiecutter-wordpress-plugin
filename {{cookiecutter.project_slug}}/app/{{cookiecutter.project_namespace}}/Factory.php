<?php

namespace {{cookiecutter.project_namespace}};

class Factory {

{% if cookiecutter.create_wp_cli == 'yes' %}
	/**
	 * @var CliCommands|null
	 */
	private static $cliCommands;
{% endif %}

	/**
	 * @var Shortcode|null
	 */
	private static $shortcode;

	/**
	 * @var Ajax|null
	 */
	private static $ajax;

{% if cookiecutter.create_wp_cli == 'yes' %}
	/**
	 * @return CliCommands
	 */
	public function createCliCommands() {
		if ( ! self::$cliCommands ) {
			self::$cliCommands = new CliCommands();
		}
		return self::$cliCommands;
	}
{% endif %}

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
}
