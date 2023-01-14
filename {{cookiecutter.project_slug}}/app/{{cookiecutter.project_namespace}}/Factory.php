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

{% if cookiecutter.create_shortcode == 'yes' %}
	/**
	 * @since {{cookiecutter.project_version}}
	 * 
	 * @var Shortcode|null
	 */
	private static $shortcode;
{% endif %}

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
	public function create_cli_commands() {
		if ( ! self::$cliCommands ) {
			self::$cliCommands = new CliCommands();
		}
		return self::$cliCommands;
	}
{% endif %}

{% if cookiecutter.create_shortcode == 'yes' %}
	/**
	 * Create Shortcode instance.
	 * 
	 * @since {{cookiecutter.project_version}}
	 * 
	 * @return Shortcode
	 */
	public function create_shortcode() {
		if ( ! self::$shortcode ) {
			self::$shortcode = new Shortcode();
		}
		return self::$shortcode;
	}
{% endif %}

	/**
	 * Create Ajax instance.
	 * 
	 * @since {{cookiecutter.project_version}}
	 * 
	 * @return Ajax
	 */
	public function create_ajax() {
		if ( ! self::$ajax ) {
			self::$ajax = new Ajax();
		}
		return self::$ajax;
	}
}
