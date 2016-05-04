  <?php

/* Template Name: Company */

get_header(); ?>

<section class="content content--work" id="main">

  <div class="container">

    <div class="row">
      <div class="col-md-8 col-centered text-center">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>
    </div>

  </div>

</section>

<section class="content content--work content--work--background" id="main">

  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <h2 class="headline headline--light text-center">Chris Chandler</h2>
        <h3 class="subheadline subheadline--light margin-bottom-md text-center">Chief Executive Officer</h2>
      </div>
    </div>

    <div class="row property">
      <div class="col-md-6">
        <a class="video-wrap" href="//vimeo.com/165092517" data-lity>
          <img src="<?php bloginfo('template_url'); ?>/img/proton/chris.jpg" class="property__thumb">
          <div class="video-wrap__icon"><i class="fa fa-play" aria-hidden="true"></i></div>
        </a>
      </div>
      <div class="col-md-6">
        <p class="message message--light">Throughout his three decades of devoted work in the healthcare industry, Chris Chandler has held one principle above all else: a dedication to helping people in need. Anyone who spends more than a few moments talking to Chris will undoubtedly have the privilege of hearing at least one story about a patient who - through tragedy or perseverance - made a permanent and profound impact on his life. Chris’ unquenchable thirst to provide health networks and universities access to proton therapy centers is fueled by his love for the people they help.</p>
        <p class="message message--light">Chris experience in healthcare is deep and vast, having held frontline clinical and management positions in both private and academic settings. Chris previously operated the Department of Pathology for the School of Medicine at University of Florida, and also served as the Administrator of the James Graham Brown Cancer Center at University of Louisville. Chris has held leadership positions for multiple proton therapy organizations, including ProCure and IBA Proton Therapy, where he developed, opened and operated four proton centers. Chris holds a B.S. in medical technology, and an M.S. and MBA in Healthcare Administration from University of Florida.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <hr class="margin-md">
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <h2 class="headline headline--light margin-bottom-md text-center">Team</h2>
      </div>
    </div>

    <?php get_template_part( 'partials/people' ); ?>

  </div> <!-- /.container -->

</section>

<?php get_footer(); ?>
