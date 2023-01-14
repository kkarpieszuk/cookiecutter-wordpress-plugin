<?php

namespace {{cookiecutter.project_namespace}};

/**
 * Ajax class.
 * 
 * @since {{cookiecutter.project_version}}
 */
class Ajax {

	/** 
	 * Register hooks.
	 * 
	 * @since {{cookiecutter.project_version}}
	 */
	public function register_hooks() {

		\add_action( 'wp_enqueue_scripts', [ $this, 'enqueue' ] );
		\add_action( 'wp_ajax_fetch_{{cookiecutter.project_namespace}}_ajax', [ $this, 'fetch_for_ajax' ] );
		\add_action( 'wp_ajax_nopriv_fetch_{{cookiecutter.project_namespace}}_ajax', [ $this, 'fetch_for_ajax' ] );
	}
	
	/**
	 * Enqueue and localize scripts.
	 * 
	 * @since {{cookiecutter.project_version}}
	 */
	public function enqueue() {
		\wp_enqueue_script( '{{cookiecutter.project_namespace}}_script', {{ cookiecutter.project_slug.upper() }}_PLUGIN_URL . 'assets/js/script.js', [ 'jquery' ] );
		\wp_localize_script( '{{cookiecutter.project_namespace}}_script', '{{cookiecutter.project_namespace}}_data',
			[
				'ajax_url' => admin_url( 'admin-ajax.php' ),
			] );
	}

	/**
	 * Response to ajax.
	 * 
	 * @since {{cookiecutter.project_version}}
	 */
	public function fetch_for_ajax() {
		
		\wp_send_json( '' );
	}
}
