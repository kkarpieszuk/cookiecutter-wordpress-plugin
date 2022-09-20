<?php

namespace {{cookiecutter.project_namespace}};

class Shortcode {
	public function registerShortcode() {
        \add_shortcode( '{{cookiecutter.project_namespace}}', [ $this, 'shortcodeCallback' ] );
    }

	public function shortcodeCallback() {
        \printf( '<div class="{{cookiecutter.project_namespace}}-shortcode">%s</div>', __( 'It comes from {{cookiecutter.project_name}} plugin...', '{{cookiecutter.project_namespace}}' ) );
    }
}