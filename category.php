<?php


get_header();
?>

<div class="blog-header">
	<div class="grid-container">
		<div class="grid-x grid-padding-x grid-padding-y">
            <div class="large-12 cell">
                <h2><span>Category: </span><?= single_cat_title();?></h2>
            </div>
            <!-- <div class="large-4 cell">

            </div> -->
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
    </div>
</section>


<?php
get_footer();
?>
