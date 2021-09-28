<?php
//silence


function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style-name', get_template_directory_uri() . '/style.css' );  //Här registrerar du Stylesheet
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' ); // man måste skapa funtions.php. header.php index.phå. footer.php och style.css i en och samma mapp