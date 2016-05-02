<div class="row content__people">
  <div class="col-md-4">

    <ul class="nav nav-tabs about-tabs" role="tablist" id="people-tabs">

      <?php
        $args = array(
          'post_type' => 'person',
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
  <div class="col-md-8">
    <div class="tab-content">

      <?php
        $args = array(
          'post_type' => 'person',
          'order' => 'ASC',
          'orderby' => 'menu_order'
        );

        $child_pages = new WP_Query($args);
        $index = 0;

        if( $child_pages->have_posts() ) : while($child_pages->have_posts()) : $child_pages->the_post();

        $index++;

        ?>

        <div role="tabpanel" class="tab-pane fade in <?php if($index === 1) { echo 'active'; } ?> cf" id="ecperson-<?php the_ID(); ?>">
          <h2 class="headline"><?php the_title(); ?></h2>
          <h3 class="subheadline subheadline--tertiary margin-bottom-sm"><?php the_field('job_title'); ?></h3>
          <div class="message">
            <?php the_content(); ?>
          </div>
        </div>

      <?php endwhile; else: endif; ?>

    </div>
  </div>
</div>
