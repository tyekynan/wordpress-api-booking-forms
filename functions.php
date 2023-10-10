<?php
//Located in /wp-content/themes/hello-elementor/functions.php.
add_action('rest_api_init', function() {

    $object_type = 'post';
    $meta_args = array(
        'type'         => 'string',
        'description'  => 'Reservation status assigned to reservation',
        'single'       => true,
        'show_in_rest' => true,
    );
    
    register_meta( $object_type, 'reservation-status', $meta_args );
    });