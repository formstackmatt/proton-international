<?php

get_template_part( 'head' ); ?>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->
<body <?php body_class(); ?>>

  <section <?php body_class('hero'); ?>>
    <nav class="navbar navbar-custom" role="navigation">
      <div class="container">
        <div class="navbar-header page-scroll">
          <a class="navbar-logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo--white.png"></a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <p class="menu-mobile-title">Menu</p>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
            <li><a href="<?php bloginfo('url'); ?>/services">Services</a></li>
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
        <div class="col-md-9 col-centered">
          <h1 class="headline">We're building the future of cancer treatment.</h1>
          <h2 class="sub-headline">Our turnkey, full-service solution allows any health network or university to build and maintain a state-of-the-art proton therapy center without hassle.</h2>
        </div>
      </div>
    </div>

    <?php } ?>

  </section><!-- /.hero -->
