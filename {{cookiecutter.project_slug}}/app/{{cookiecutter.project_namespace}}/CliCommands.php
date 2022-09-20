<?php

namespace {{cookiecutter.project_namespace}};

class CliCommands {

    public function registerCommands() {
        \WP_CLI::add_command( '{{cookiecutter.project_namespace | lower}}', $this );
    }

    public function run() {
        \WP_CLI::success( __( "It runs!", '{{cookiecutter.project_namespace}}' ) );
    }
}