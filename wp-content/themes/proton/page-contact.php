<?php

/* Template Name: Contact */

get_header(); ?>

<section class="content content--contact">

  <div class="container">

    <div class="row content__contact">

      <div class="col-md-6">

        <p class="message"><strong>Proton International</strong><br><br>
          M-F 8:30 AM - 5:00 PM ET<br>
          502.396.1009<br><br>
          <a href="mailto:support@protonintl.com">support@protonintl.com</a>
        </p>

        <hr class="margin-md">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>

      </div>

      <div class="col-md-6">
        <div class="contact-form">
          <?php echo do_shortcode('[contact-form-7 id="89" title="Contact form 1"]'); ?>
        </div>
      </div>

    </div>

  </div>

</section>

<?php get_footer(); ?>
