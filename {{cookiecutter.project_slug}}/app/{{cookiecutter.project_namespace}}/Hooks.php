<?php

namespace {{cookiecutter.project_namespace}};

/**
 * Hooks class.
 * 
 * @since {{cookiecutter.project_version}}
 */
class Hooks {

	/**
	 * @since {{cookiecutter.project_version}}
	 * 
	 * @var Factory
	 */
	private $factory;

	/**
	 * Class constructor.
	 * 
	 * @since {{cookiecutter.project_version}}
	 * 
	 * @param Factory $factory
	 */
	public function __construct( Factory $factory ) {
		$this->factory = $factory;
	}

	/**
	 * Register hooks.
	 * 
	 * @since {{cookiecutter.project_version}}
	 */
	public function registerHooks() {

		\add_action( 'wp_enqueue_scripts', [ $this->factory->createAjax(), 'enqueue' ] );
		\add_action( 'wp_ajax_fetch_{{cookiecutter.project_namespace}}_ajax', [ $this->factory->createAjax(), 'fetchForAjax' ] );
		\add_action( 'wp_ajax_nopriv_fetch_{{cookiecutter.project_namespace}}_ajax', [ $this->factory->createAjax(), 'fetchForAjax' ] );

{% if cookiecutter.create_shortcode == 'yes' %}
		\add_action( 'init', [ $this->factory->createShortcode(), 'registerShortcode' ], 11 );
{% endif %}

{% if cookiecutter.create_wp_cli == 'yes' %}
		if ( defined( 'WP_CLI' ) && WP_CLI ) {
			\add_action( 'cli_init', [ $this->factory->createCliCommands(), 'registerCommands' ] );
		}
{% endif %}
	}
}
