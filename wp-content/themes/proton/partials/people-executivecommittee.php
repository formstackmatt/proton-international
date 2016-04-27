<div class="row content__people">
  <div class="col-md-3 col-md-push-9">
          
    <ul class="nav nav-tabs about-tabs" role="tablist" id="people-tabs">
    
      <?php
        $args = array(
          'post_type' => 'person',
          'tax_query' => array(
						array(
							'taxonomy' => 'department',
							'field'    => 'slug',
							'terms'    => 'executive-committee',
						),
					),
          'order' => 'ASC',
          'orderby' => 'menu_order'
        );

        $child_pages = new WP_Query($args);
        $index = 0;

        if($child_pages->have_posts()) : while($child_pages->have_posts()) : $child_pages->the_post();

        $index++;

        ?>

        <li class="<?php if($index === 1) { echo 'active'; } ?>">
          <a href="#ecperson-<?php the_ID(); ?>" role="tab" data-toggle="tab"><?php the_title(); ?></a>
        </li>

      <?php endwhile; else: endif; ?>
    
    </ul>
    
  </div>
  <div class="col-md-9 col-md-pull-3">
    <div class="tab-content">
      
      <?php
        $args = array(
          'post_type' => 'person',
          'tax_query' => array(
						array(
							'taxonomy' => 'department',
							'field'    => 'slug',
							'terms'    => 'executive-committee',
						),
					),
          'order' => 'ASC',
          'orderby' => 'menu_order'
        );

        $child_pages = new WP_Query($args);
        $index = 0;
        
        if( $child_pages->have_posts() ) : while($child_pages->have_posts()) : $child_pages->the_post();

        $index++;
      
        ?>

        <div role="tabpanel" class="tab-pane fade in <?php if($index === 1) { echo 'active'; } ?> cf" id="ecperson-<?php the_ID(); ?>">
          <div class="thumb">
            <?php echo get_the_post_thumbnail(); ?>
          </div>
          <div class="content">
            <h2 class="name"><?php the_title(); ?></h2>
            <h3 class="title"><?php the_field('job_title'); ?></h3>
            <h3 class="title"><?php the_field('location'); ?></h3>
            <div class="content__details">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      
      <?php endwhile; else: endif; ?>

    </div>
  </div>
</div>