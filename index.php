<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ispirt
 */

get_header();
?>
<div class="blog-header">
	<div class="grid-container">
		<div class="grid-x grid-padding-x grid-padding-y">
		<div class="large-8 cell">
			<h2><span>Policy Hacks</span> blog </h2>
			<?= get_field("paragraph","options");?>
		</div>
		<div class="large-4 cell">
			<?php //echo get_site_url();?>
			<form action=<?= get_site_url(); ?> method="GET" class="search-wrap">
				<input type="text" class="search" name="s" placeholder="Search...">
				<input type="hidden" name="post_type" value="post">
				<button type="submit" class="search-submit"></button>
			</form>
		</div>
		</div>
	</div>
</div>

<section class="all-blog-cards card-outer-wrap">
  <div class="grid-container">
	<?php
		if(have_posts())
		{
			while(have_posts())
			{
				the_post();
	?>
	<div class="blog-card">
			<div class="grid-x grid-margin-x">
				<?php
						$featured_image = get_the_post_thumbnail_url();
						if($featured_image == "" ) {
				?>
				<div class="large-12 cell large-order-1 small-order-2 medium-order-2">
						<div class="blog-info">
								<a href="<?= get_the_permalink();?>" class="blog-title"><?= get_the_title();?></a>
								<span class="author"><?= get_the_date();?>- By <a href="<?= get_author_posts_url(get_the_author_meta( 'ID' )); ?>" class="author"> <?= get_the_author();?></a></span>
								<p class="description"><?= get_the_excerpt();?></p>
								<a href="<?= get_the_permalink();?>" class="read-more-button">Read more</a>
						</div>
				</div>
				<?php
						} else {
				?>
				<div class="large-8 cell large-order-1 small-order-2 medium-order-2">
						<div class="blog-info">
								<a href="<?= get_the_permalink();?>" class="blog-title"><?= get_the_title();?></a>
								<span class="author"><?= get_the_date();?>- By <a href="<?= get_author_posts_url(get_the_author_meta( 'ID' )); ?>" class="author"> <?= get_the_author();?></a></span>
								<p class="description"><?= get_the_excerpt();?></p>
								<a href="<?= get_the_permalink();?>" class="read-more-button">Read more</a>
						</div>
				</div>
				<div class="large-4 cell large-order-2 small-order-1 medium-order-1">
						<a href="#" class="img-wrap">
						<img src="<?= $featured_image?>">
						</a>
				</div>
				<?php

						}
				?>

			</div>
	</div>
	<?php
			}

		}
	?>


	<?php
	// Protect against arbitrary paged values
	$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

	$args = array(
		'post_type' => 'post',
		'orderby' => 'title',
		'order' => 'DESC',
		'post_status'=>'publish',
		'posts_per_page' => 5,
		'paged' => $paged,
		// 'post__not_in' => get_option( 'sticky_posts' )
	);
	$the_query = new WP_Query($args);
	?>
		<?php if ( $the_query->have_posts() ) :?>
		<!-- <div class="pagination"> -->
		<nav aria-label="Pagination" class="pagination-nav">
			<ul class="pagination text-center">
				<!-- <li class="pagination-previous"><a href="#" class="button">Previous Page</a></li> -->
				<!-- <li class="pagination-previous button"> -->
				<?php //previous_posts_link('<li class="pagination-previous"><a href="#" class="button">Previous Page</a></li>',"Previous Page");
				// echo $the_query->max_num_pages;
				if( get_next_post_link() != "") { ?>
					<li class="pagination-previous">
						<a href="<?= get_previous_posts_page_link() ?>" class="button">Previous Page</a></li>
						<?php //next_posts_link('<li class="pagination-next"><a href="#" class="button">Next Page</a></li>',"Next Page"); ?>
					</li>
				<?php }
				?>

				<!-- </li> -->
				<!-- <li><a href="#" class="current">1</a></li>
				<li><a href="#" aria-label="Page 2">2</a></li>
				<li><a href="#" aria-label="Page 3">3</a></li>
				<li><a href="#" aria-label="Page 4">4</a></li>
				<li><a href="#" aria-label="Page 4">5</a></li>
				<li class="ellipsis"></li>
				<li><a href="#" aria-label="Page 12">100</a></li>-->
				<?php
				echo paginate_links( array(
					'format'  => 'page/%#%',
					'current' => $paged,
					'prev-next' => false,
					'prev_text'=> "",
					'next_text'=> "",
					'total'   => $the_query->max_num_pages,
					) );
				?>
			
				<?php
				if( get_previous_post_link() != "") { ?>
					<li class="pagination-next">
						<a href="<?= get_next_posts_page_link(); ?>" class="button">Next Page</a></li>
						<?php //next_posts_link('<li class="pagination-next"><a href="#" class="button">Next Page</a></li>',"Next Page"); ?>
					</li>
				<?php }
				?>
				<li class="clear"></li>
			</ul>
		</nav>

	<?php endif; ?>
  </div>
</section>


<?php
get_footer();
