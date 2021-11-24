<?php
/**
 * Navigation template.
 * 
 * @package ITService
 */
?>

<div class="container py-3 border-bottom mb-4">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between  ">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <?php 
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
           
          if ( has_custom_logo() ) {
              echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" width="180" height="40">';
          } else {
              echo '<h1>' . get_bloginfo('name') . '</h1>';
          }
          //<img src="echo get_parent_theme_file_uri( 'assets/img/logo-alt.svg' );" alt="" width="180" height="40">
        ?>
        
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary border-2">Заявка на поддержку</button>
      </div>
    </header>
</div>