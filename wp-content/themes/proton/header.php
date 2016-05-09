<?php

get_template_part( 'head' ); ?>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->
<body <?php body_class(); ?>>

  <section class="hero">
    <nav class="navbar navbar-custom" role="navigation">
      <div class="container">
        <div class="navbar-header page-scroll">
          <a class="navbar-logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/proton/logo--color.png" alt="Proton International logo"></a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <p class="menu-mobile-title">Menu</p>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
            <li>
              <a href="<?php bloginfo('url'); ?>/services">Services</a>
              <ul class="navigation__submenu">
                <li class="navigation__subitem"><a href="<?php bloginfo('url'); ?>/services">Our Services</a></li>
                <li class="navigation__subitem"><a href="<?php bloginfo('url'); ?>/services/assured-access">Assured Access</a></li>
                <li class="navigation__subitem"><a href="<?php bloginfo('url'); ?>/services/operations">Operations</a></li>
              </ul>
            </li>
            <li><a href="<?php bloginfo('url'); ?>/work">Work</a></li>
            <li><a href="<?php bloginfo('url'); ?>/company">Company</a></li>
            <li><a href="<?php bloginfo('url'); ?>/news">News</a></li>
            <li><a href="<?php bloginfo('url'); ?>/contact">Contact</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

    <?php if(is_front_page()){ ?>

      <div class="hero__content">
        <div class="container">
          <div class="col-md-10 col-centered">
            <h1 class="headline">We should be your first call.</h1>
            <h2 class="subheadline">We will make your Proton Therapy Center happen.</h2>
          </div>
        </div>
      </div>

    <?php } elseif(is_single()) { ?>

      <div class="hero__content">
        <div class="container">
          <div class="col-md-10 col-centered">
            <h1 class="headline"><?php the_title(); ?></h1>
            <h2 class="subheadline"><?php the_time('F j, Y'); ?></h2>
          </div>
        </div>
      </div>

    <?php }else { ?>

      <div class="hero__content">
        <div class="container">
          <div class="col-md-10 col-centered">
            <h1 class="headline"><?php the_field('hero_title'); ?></h1>
            <h2 class="subheadline"><?php the_field('hero_subtitle'); ?></h2>
          </div>
        </div>
      </div>

    <?php } ?>

  </section><!-- /.hero -->
