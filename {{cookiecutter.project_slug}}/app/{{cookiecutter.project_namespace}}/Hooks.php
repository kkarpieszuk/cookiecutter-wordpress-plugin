<?php

namespace {{cookiecutter.project_namespace}};

/**
 * Hooks class.
 * 
 * @since {{cookiecutter.project_version}}
 */
class Hooks {

	/**
	 * Register hooks.
	 * 
	 * @since {{cookiecutter.project_version}}
	 */
	public function register_hooks() {

		$ajax = new Ajax();
		$ajax->register_hooks();
{% if cookiecutter.create_shortcode == 'yes' %}

		$shortcode = new Shortcode();
		$shortcode->register_hooks();
{% endif %}
{% if cookiecutter.create_wp_cli == 'yes' %}

		$cli_commands = new CliCommands();
		$cli_commands->register_hooks();
{% endif %}
	}
}
