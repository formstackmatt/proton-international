<?php 

/* Template Name: Expertise */

get_header(); ?>

<div class="video" data-vide-bg="<?php bloginfo('template_url'); ?>/video/expertise-2" data-vide-options="loop: false"></div>

<section class="section content content--expertise" id="main">

  <div class="container">
  
    <div class="row">
    
      <div class="col-md-11 col-centered text-center">
        
        <ul class="nav nav-tabs work-tabs" role="tablist" id="myTab">
          <li role="presentation" class="active">
            <a href="#third-party-development" role="tab" data-toggle="tab">Third Party Development</a>
          </li>
          <li role="presentation">
            <a href="#development" role="tab" data-toggle="tab">Development</a>
          </li>
          <li role="presentation">
            <a href="#land-assemblage" role="tab" data-toggle="tab">Land Assemblage</a>
          </li>
          <li role="presentation">
            <a href="#clinical" role="tab" data-toggle="tab">Clinical</a>
          </li>
          <li role="presentation">
            <a href="#university" role="tab" data-toggle="tab">University</a>
          </li>
        </ul>
        
      </div>
      
      <div class="col-md-10 col-centered text-center">

        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="third-party-development">
						
						<div class="row">
							<div class="col-md-6">
								<?php the_field('third_party_development_content'); ?>
							</div>
							<div class="col-md-6">
								<?php the_field('third_party_development_content_right'); ?>
							</div>
						</div>
            
          </div>
          <div role="tabpanel" class="tab-pane fade" id="development">
            <?php the_field('development_content'); ?>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="land-assemblage">
            <?php the_field('land_content'); ?>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="clinical">
            <?php the_field('clinical_content'); ?>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="university">
            <?php the_field('university_content'); ?>
          </div>
        </div>
      
      </div>
    
    </div>
  
  </div>

</section>

<?php get_footer(); ?>
