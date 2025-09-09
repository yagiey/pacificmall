<?php get_header(); ?>
      			  <div class="page-inner">
                <div class="page-main" id="pg-contribution">
                  <div class="contribution">
<?php
$terms = get_specific_posts( 'daily_contribution', 'event', $term, -1 );
if ( $terms->have_posts() ):
  while ( $terms->have_posts() ): $terms->the_post();
    get_template_part( 'content-tax' );
  endwhile;
  wp_reset_postdata();
endif;
?>
                  </div>
                </div>
              </div>
<?php get_footer();
