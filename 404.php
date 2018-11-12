<?php get_header(); ?>

  <section class="error-404 not-found container">
    <header class="page-header row">
      <div class="col-sm">
        <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'thm' ); ?></h1>
      </div>
    </header>

    <div class="page-content row">
      <div class="col-sm">
        <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'thm' ); ?></p>

        <?php get_search_form(); ?>

        <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

        <div class="widget widget_categories">
          <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'thm' ); ?></h2>

          <ul>
          <?php
          wp_list_categories( array(
          'orderby'    => 'count',
          'order'      => 'DESC',
          'show_count' => 1,
          'title_li'   => '',
          'number'     => 10,
          ) );
          ?>
          </ul>
        </div><!-- .widget -->

        <?php
        /* translators: %1$s: smiley */
        $thm_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'thm' ), convert_smilies( ':)' ) ) . '</p>';
        the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$thm_archive_content" );

        the_widget( 'WP_Widget_Tag_Cloud' );
        ?>
      </div><!--col-sm-->

  </div><!--page-content-->
</section><!--.container-->

<?php get_footer(); ?>
