<?php

function add_role_viajero()
{
  remove_role('viajero');
    add_role(
        'viajero',
        'Viajero',
        [
            'read'                 => true,
            'edit_posts'           => true,
            'upload_files'         => true,
            'publish_posts'        => true,
         // 'delete_posts'         => true,
            'edit_published_posts' => true
        ]
    );
}

// add the simple_role
add_action('init', 'add_role_viajero');

?>
