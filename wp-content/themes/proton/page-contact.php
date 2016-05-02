<?php

/* Template Name: Contact */

get_header(); ?>

<section class="content content--contact">

  <div class="container">

    <div class="row content__contact">

      <div class="col-md-6">

        <p><strong>T.M. Crowley &amp; Associates Headquarters</strong><br>
          501 Pennsylvania Parkway, Ste.160<br>
          Indianapolis, IN 46280 • 317.705.8800</p>

        <p>Other office locations in Chicago, IL, Lincoln, RI, and Denver, CO.</p>

        <div class="divider"></div>

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
