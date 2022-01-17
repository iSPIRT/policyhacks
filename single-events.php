<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ispirt
 */

get_header();

while(have_posts())
{ 
	the_post();

	$previous_post = get_adjacent_post(false,"",true);
	$next_post = get_adjacent_post(false,"",false);
	// die();
	// $next_post_id = $next_post->ID; 
	// $previous_post_link = previous_post_link(); 
	// $next_post_link = next_post_link();
?>
<section class="blog-card-wrap card-outer-wrap">
  <div class="grid-container">
    <div class="grid-x">
      <div class="large-12 cell">
          <div class="blog-card">
            <h1 href="#" class="blog-title"><?= get_the_title();?></h1>
            <span class="author"><?= get_the_date();?> - <a href="#" class="author"> By <?= get_the_author();?></a></span>
            <div href="#" class="img-wrap">
				<?php
					$featured_image = get_the_post_thumbnail_url();
					if($featured_image == "" ) {
						$featured_image = get_template_directory_uri()."/img/gray.jpg";
					}
				?>
              <img src="<?= $featured_image; ?>">
            </div>
         	<?php the_content();?>
		  </div>
		  <?php 
		  	if($previous_post != "") {	
			?>
				<div class="button-wrap-left">
					<a href="<?= get_permalink($previous_post->ID) ?>" class="button-text"><?= get_the_title($previous_post->ID);?></a>
					<a href="<?= get_permalink($previous_post->ID) ?>" class="button" >Previous</a>
			  	</div>
			
			<?php }
		 ?>
		  <?php 
		  		if($next_post != "") {	
					?>
					<div class="button-wrap-right">
						<a href="<?= get_permalink($next_post->ID) ?>" class="button-text"><?= get_the_title($next_post->ID); ?></a>
						<a href="<?= get_permalink($next_post->ID) ?>" class="button">Next</a>
          			</div>
			<?php
				}
		 	?>

         
          <div class="clear"></div>
      </div>
    </div>
  </div>
</section>

<?php

}
get_footer();
