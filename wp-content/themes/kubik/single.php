<?php get_header(); ?>
	<main>
		<div class="container">
			<?php if (have_posts()) : ?>
				<?php while(have_posts()) : the_post();?>
				<?php get_template_part('content'); ?> 
				<br>	
				<hr>
				<br>
				<?php comments_template(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
			<article class="middle-article">
				<div class="double-line"><div class="triangle"></div></div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 wrap-article-2">
						<h3 class="rubric">travel</h3>
						<h2 class="h2">Donec sed odio dui. Cras mattis consectetur purus sit amet fermentum.  </h2>
						<img src="img/blog-img-2.jpg" alt="пейзаж" class="article-img">
						<div class="wrap-post-article">
						<p class="posting">
							Donec aredsed odio dui. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non metus auctor fringilla.
							<br>
							<br>
							
							Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
							<a href="#" class="button">Full Story <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</article>
		</div>
			
		<div class="quotation">
			<div class="double-line"><div class="triangle"></div></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<div class="col-md-6">
								<img src="img/hatfield.jpg" alt="hatfield" class="article-img">
							</div>
							<div class="col-md-6">
								<div class="wrap-rubric-quote">
								<h3 class="rubric">Quote</h3>
								<h2 class="h2">Fuck bitches as many as you can </h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-10 col-md-offset-2">
								<div class="main-quote">
									<p class="posting"><span>“</span>Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper. Curabitur blandit tempus porttitor <span>”</span></p>
									<h3 class="h3">VEN diesel <span> 1962-2006</span></h3>
									<a href="#" class="button">Full Story <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>