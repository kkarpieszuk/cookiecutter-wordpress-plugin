<?php

namespace {{cookiecutter.project_namespace}};

/**
 * Shortcode class.
 * 
 * @since {{cookiecutter.project_version}}
 */
class Shortcode {

    /**
     * Register shortcode.
     * 
     * @since {{cookiecutter.project_version}}
     */
	public function registerShortcode() {
        \add_shortcode( '{{cookiecutter.project_namespace}}', [ $this, 'shortcodeCallback' ] );
    }

    /**
     * Shortcode callback.
     * 
     * @since {{cookiecutter.project_version}}
     */
	public function shortcodeCallback() {
        \printf( '<div class="{{cookiecutter.project_namespace}}-shortcode">%s</div>', __( 'It comes from {{cookiecutter.project_name}} plugin...', '{{cookiecutter.project_namespace}}' ) );
    }
}