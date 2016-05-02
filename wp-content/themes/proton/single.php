<?php get_header(); ?>

<section class="section content content--news" id="main">
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="content--news__individual">
      <div class="row">
        <div class="col-md-3">
          <div class="message back-link">
            <a href="<?php bloginfo('url'); ?>/news">&larr; All News Posts</a>
          </div>
        </div>
        <div class="col-md-9">
          <div class="message">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; endif; ?>
  </div>
</section>

<?php get_footer(); ?>
