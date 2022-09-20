<?php

namespace {{cookiecutter.project_namespace}};

/**
 * Factory class.
 * 
 * @since {{cookiecutter.project_version}}
 */
class Factory {

{% if cookiecutter.create_wp_cli == 'yes' %}
	/**
	 * @since {{cookiecutter.project_version}}
	 * 
	 * @var CliCommands|null
	 */
	private static $cliCommands;
{% endif %}

	/**
	 * @since {{cookiecutter.project_version}}
	 * 
	 * @var Shortcode|null
	 */
	private static $shortcode;

	/**
	 * @since {{cookiecutter.project_version}}
	 * 
	 * @var Ajax|null
	 */
	private static $ajax;

{% if cookiecutter.create_wp_cli == 'yes' %}
	/**
	 * Create CLICommand instance.
	 * 
	 * @since {{cookiecutter.project_version}}
	 * 
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
	 * Create Ajax instance.
	 * 
	 * @since {{cookiecutter.project_version}}
	 * 
	 * @return Ajax
	 */
	public function createAjax() {
		if ( ! self::$ajax ) {
			self::$ajax = new Ajax();
		}
		return self::$ajax;
	}

	/**
	 * Create Shortcode instance.
	 * 
	 * @since {{cookiecutter.project_version}}
	 * 
	 * @return Shortcode
	 */
	public function createShortcode() {
		if ( ! self::$shortcode ) {
			self::$shortcode = new Shortcode();
		}
		return self::$shortcode;
	}
}
