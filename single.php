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
<section class="blog-card-wrap">
  <div class="grid-container">
    <div class="grid-x">
      <div class="large-12 cell">
          <div class="blog-card">
            <h1 class="blog-title"><?= get_the_title();?></h1>
            <span class="author"><?= get_the_date();?> - <a href="<?= get_author_posts_url(get_the_author_meta( 'ID' )); ?>	" class="author"> By <?= get_the_author();?></a></span>
            <div class="img-wrap">
				<?php
					$featured_image = get_the_post_thumbnail_url();
					if($featured_image !== "" ) {?>
						<img src="<?= $featured_image; ?>">
					<?php
					}
				?>
            </div>
         	<?php the_content();?>
		  </div>
		  <div class="button-wrap">
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
			</div>
      </div>
    </div>
  </div>
  <?php comments_template(); ?>
</section>

<?php

}
get_footer();
