<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="footer bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-12 spacing_p-tb-20">
            <p class="text-center text-light spacing_m-tb-10">
              Brightling Hotel &copy <span id="date"></span>, All Rights
              Reserved
            </p>
          </div>
        </div>
      </div>
    </footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>
</html>

