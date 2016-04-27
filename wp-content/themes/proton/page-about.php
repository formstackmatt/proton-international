<?php 

/* Template Name: About */

get_header(); ?>

<div class="video" data-vide-bg="<?php bloginfo('template_url'); ?>/video/tom-2" data-vide-options="loop: false"></div>

<section class="section content content--about" id="main">

  <div class="content--about__description__wrap">

    <div class="container">
      <div class="row">
        <div class="col-md-8 content--about__description">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>

  </div>

  <div class="section--department section--department--crowley cf">

    <div class="section--department--crowley__left">
      <img src="<?php bloginfo('template_url'); ?>/img/tom.jpg">
    </div>
    <div class="col-md-6 section--department--crowley__right">
      <h2>Tom Crowley</h2>
      <h3 class="section--department__subtitle">Chief Executive Officer</h3>
      <p>By design, Tom Crowley has been the author of countless incredible stories over the past three decades, but the focal point of very few. A relentless entrepreneur who prefers to let his work speak for itself, Tom is the consummate conductor - masterfully balancing and directing numerous components of projects to ensure a beautiful and unique final product.</p>
      <p>Throughout his career, Tom's philosophy has been predicated on defiantly and convincingly overcoming adversity. The worst (but perhaps best) thing someone can tell Tom is, "it can't be done." Tom's refusal to wilt in the face of ominous odds has resulted in some of the most unlikely and innovative real estate projects in the nation. Moreover, his perseverance has empowered his seasoned and expert team to sustain and grow T.M. Crowley & Associates into a national leader.</p>
      <p class="no-margin">Tom Crowley is the man you want next to you in any situation, and the one no person or organization prefers to contradict. Simply put, he doesn't quit, and pushes the envelope to transform projects from a matter of "if" to "when." This philosophy echoes across the T.M. Crowley & Associates staff, allowing you to focus on the execution of your vision, not whether it's possible.</p>
    </div>

  </div> <!-- /.section--department -->

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
