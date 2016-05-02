<?php

/* Template Name: Company */

get_header(); ?>

<!--<div class="video" data-vide-bg="<?php bloginfo('template_url'); ?>/video/tom-2" data-vide-options="loop: false"></div>--->

<section class="content--about" id="main">

  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-centered text-center">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="section--department section--department--ec">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="section--department__title"><span>Executive Committee</span></h2>
        </div>
      </div>
      <?php get_template_part( 'partials/people', 'executivecommittee' ); ?>
    </div>
  </div> <!-- /.section--department -->

  <div class="section--department section--department--red">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="section--department__title"><span>Real Estate Development</span></h2>
        </div>
      </div>
      <?php get_template_part( 'partials/people', 'realestatedevelopment' ); ?>
    </div>
  </div> <!-- /.section--department -->

  <div class="section--department section--department--cm">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="section--department__title"><span>Construction Management</span></h2>
        </div>
      </div>
      <?php get_template_part( 'partials/people', 'constructionmanagement' ); ?>
    </div>
  </div> <!-- /.section--department -->

  <div class="section--department section--department--brokerage">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="section--department__title"><span>Brokerage</span></h2>
        </div>
      </div>
      <?php get_template_part( 'partials/people', 'brokerage' ); ?>
    </div>
  </div> <!-- /.section--department -->

  <div class="section--department section--department--admin">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="section--department__title"><span>Administration</span></h2>
        </div>
      </div>
      <?php get_template_part( 'partials/people', 'administration' ); ?>
    </div>
  </div> <!-- /.section--department -->

</section>

<?php get_footer(); ?>
