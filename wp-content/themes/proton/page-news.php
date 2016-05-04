<?php

/* Template Name: News */

get_header(); ?>

<section class="content content--news" id="main">

  <div class="container">

			<?php

				$args = array('posts_per_page' => 10);
				$news_posts = new WP_Query($args);

				if($news_posts->have_posts()) :
				while($news_posts->have_posts()) :
				$news_posts->the_post();

			?>

			<div class="content--news__item">

				<div class="row">

					<div class="col-md-3">

						<h4 class="subheadline subheadline--tertiary"><?php the_time('F j, Y'); ?></h4>

					</div>

					<div class="col-md-9">

						<h3 class="sub-headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p class="message"><?php the_excerpt(); ?></p>
						<p class="message"><a href="<?php the_permalink(); ?>">Read More &raquo;</a></p>

					</div>

				</div>

			</div>

			<?php endwhile; else: endif; ?>

  </div>

</section>

<?php get_footer(); ?>
