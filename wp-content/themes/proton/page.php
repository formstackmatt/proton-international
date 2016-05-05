<?php get_header(); ?>

<section class="content" id="main">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-centered">
        <div class="message--tertiary message--style-content">
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
              <?php the_content(); ?>
          <?php endwhile; ?>
          <?php else: ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
