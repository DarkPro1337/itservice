<?php
/**
 * Navigation template.
 * 
 * @package ITService
 */

$menu_class = \ITSERVICE_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('itservice-header-menu');
$header_menus = wp_get_nav_menu_items($header_menu_id);
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
        ?>
        
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      </ul>

      <div class="col-md-3 text-end">
        <?php
        if (!empty($header_menus) && is_array($header_menus)) {
          foreach($header_menus as $menu_item) {
            if(!$menu_item->menu_item_parent) {
              $child_menu_items = $menu_class->get_child_menu_items($header_menus, $menu_item->ID);
              $has_children = !empty($child_menu_items) && is_array($child_menu_items);

              if(!$has_children) {
                ?>
                  <a href="<?php echo esc_url($menu_item->url)?>"><button type="button" class="btn btn-outline-primary border-2 me-1"><?php echo esc_html($menu_item->title) ?></button></a>
                <?php
              } else {

              }
            }
          }
        }
        //
        ?>
      </div>
    </header>
</div>