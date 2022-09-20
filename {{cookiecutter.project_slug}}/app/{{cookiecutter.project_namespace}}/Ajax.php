<?php

namespace {{cookiecutter.project_namespace}};

/**
 * Ajax class.
 * 
 * @since {{cookiecutter.project_version}}
 */
class Ajax {
	
	/**
	 * Enqueue and localize scripts.
	 * 
	 * @since {{cookiecutter.project_version}}
	 */
	public function enqueue() {
		\wp_enqueue_script( '{{cookiecutter.project_namespace}}_script', \plugins_url( '../../res/js/script.js', __FILE__ ), [ 'jquery' ] );
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
	public function fetchForAjax() {
		
		\wp_send_json( '' );
	}
}
