jQuery(document).ready( function($) {

    jQuery.post( 
      {{cookiecutter.project_namespace}}_data.ajax_url,
      { 'action': 'fetch_{{cookiecutter.project_namespace}}_ajax' },
      function( response ) {
          console.log(response);
        } 
      )
} );
