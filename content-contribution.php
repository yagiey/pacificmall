<article class="article-card">
  <a class="card-link" href="<?php echo get_term_link( $term ); ?>">
    <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-page-dummy.png"></div>
    <div class="body">
      <time><?php the_time( 'Y.m.d' ); ?></time>
      <p class="title"><?php echo $term->name; ?></p>
      <p class="excerpt"><?php echo $term->description; ?></p>
      <div class="buttonBox">
        <button type="button" class="seeDetail">MORE</button>
      </div>
    </div>
  </a>
</article>
