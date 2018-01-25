<article class="middle-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="double-line"><div class="triangle"></div></div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1 wrap-article-2">
			<h3 class="rubric"><?php the_category('single');?></h3>
			<h2 class="h2"> <?php wp_title(); ?></h2>
			<?php if ( has_post_thumbnail()) : the_post_thumbnail('large', array( 'class' => 'article-img' )); ?>
			<?php endif; ?>
			<div class="wrap-post-article">
			<p class="posting">
				<?php if(is_single()):?>
					<p class="posting"><?php the_content();?></p> <!--Вывод контента в полной форме записи-->
				<?php else : ?>
					<p class="posting"><?php the_excerpt();?></p> <!--Вывод контента в краткой форме записи-->
					<a href="<?php the_permalink();?>" class="button">Full Story <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</article>