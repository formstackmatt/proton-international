<?php 

get_template_part( 'head' ); ?>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->
<body <?php body_class(); ?>>  
  
  <section <?php body_class('hero'); ?>>
    <nav class="navbar navbar-custom" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <p class="menu-mobile-title">Menu</p>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/about">About</a></li>
										<li><a href="<?php bloginfo('url'); ?>/expertise">Expertise</a></li>
										<li><a href="<?php bloginfo('url'); ?>/work">Work</a></li>
										<li><a href="<?php bloginfo('url'); ?>/news">News</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/contact">Contact</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <div class="logo-container">
      <img src="<?php bloginfo('template_url'); ?>/img/logo@2x.png" class="logo">
      <?php if(is_front_page()){ ?>
        <h1>Trust experience.</h1>
      <?php } ?>
    </div>
    
    <?php if(!is_front_page()){ ?>
    
      <div class="page-title">
        <h1><?php wp_title(''); ?></h1>
      </div>
    
      <?php if(!is_404()) { ?>
      	<a href="#main" class="page-scrolldown page-scroll-button hidden-xs"><i class="fa fa-angle-down"></i></a>
      <?php } ?>
      
      <?php if(is_page('contact')) { ?>
      	<p class="credits">Site by Baksa Ritter<br> Photos &amp; video by Hether Miles</p>
      <?php } ?>
    
    <?php } else { ?>
    
    <!--
    
		  <div class="latest-news">
	    	<h2 class="latest-news__label">Latest News</h2>
	    
	    	<?php
				
					$args = array('posts_per_page' => 1);
					$news_posts = new WP_Query($args);
					
					if($news_posts->have_posts()) : 
					while($news_posts->have_posts()) : 
					$news_posts->the_post();
					
				?>
				
					<p class="latest-news__headline"><?php the_title(); ?> <a class="read-more" href="<?php the_permalink (); ?>">Read More &raquo;</a></p>
					
			-->
				      
				<?php endwhile; else: endif; ?>
				
				</div>
	    
    <?php } ?>
    
  </section><!-- /.hero -->