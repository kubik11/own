<article class="top-article">
	<div class="double-line"></div>
		<div class="row">				
			<div class="col-md-6 top-article-left">
				<h3 class="rubric"><?php the_category('single');?></h3>
				<h2 class="h2"><?php the_title();?></h2>
				<?php if(is_single()):?>
					<p class="posting"><?php the_content();?></p> <!--Вывод контента в полной форме записи-->
				<?php else : ?>
					<p class="posting"><?php the_excerpt();?></p> <!--Вывод контента в краткой форме записи-->
					<a href="<?php the_permalink();?>" class="button">Full Story <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
				<?php endif; ?>
			</div>
		<div class="col-md-6 top-article-right">
			<div class="wrap-post-img">
				<?php if ( has_post_thumbnail()) : the_post_thumbnail('large', array( 'class' => 'article-img' )); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</article>