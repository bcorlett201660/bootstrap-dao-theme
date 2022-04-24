<?php
function add_image_sizes() {
    add_image_size( 'dao-theme-landscape-large', 1200, 900, true );
    add_image_size( 'dao-theme-portrait-large', 900, 1200, true );
    add_image_size( 'dao-theme-square-large', 1200, 1200, true );

    add_image_size( 'dao-theme-landscape-medium', 800, 600, true );
    add_image_size( 'dao-theme-portrait-medium', 600, 800, true );
    add_image_size( 'dao-theme-square-medium', 800, 800, true );

    add_image_size( 'dao-theme-landscape-small', 400, 300, true );
    add_image_size( 'dao-theme-portrait-small', 300, 400, true );
    add_image_size( 'dao-theme-square-small', 400, 400, true );

    add_image_size( 'dao-theme-landscape-tiny', 200, 150, true );
    add_image_size( 'dao-theme-portrait-tiny', 150, 200, true );
    add_image_size( 'dao-theme-square-tiny', 200, 200, true );

    add_image_size( 'dao-theme-uncropped', 1200, 9999, false );
}
add_image_sizes();
?>