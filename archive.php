<?php get_header(); ?>
              <div class="page-inner full-width">
                <div class="page-main" id="pg-news">
                  <div class="main-container">
                    <div class="main-wrapper">
                      <div class="newsLists">
<?php
if ( have_posts() ):
  while ( have_posts() ):
    the_post();
    get_template_part('content-archive');
  endwhile;
endif;
?>
                      </div>
                      <div class="">
                        <ul class="pagerList">
<?php
page_navi();
?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<?php get_footer();
