<?php
/**
 * Hero template.
 * 
 * @package ITService
 */
?>

<div class="bg-light p-3 mb-4">
    <div class="container py-5 px-3"  style="background: url('<?php echo get_template_directory_uri() . '/assets/img/hero.png'?>') right center/auto no-repeat; background-size: 40%">
        <h1 class="display-5 fw-bold"><?php echo get_post_meta(get_the_ID(), '_hero_title', true); ?></h1>
        <p class="col-md-8 fs-4"><?php echo get_post_meta(get_the_ID(), '_hero_subtitle', true); ?></p>
        <?php
        if (!empty(get_post_meta(get_the_ID(), '_hero_button_link', true))) {
            ?>
            <a href="<?php echo get_post_meta(get_the_ID(), '_hero_button_link', true); ?>"><button class="btn btn-primary btn-lg" type="button"><?php echo get_post_meta(get_the_ID(), '_hero_button_title', true); ?></button></a>
            <?php
        }
        ?>
    </div>
</div>