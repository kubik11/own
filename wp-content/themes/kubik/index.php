<?php get_header(); ?>
	<main>
		<div class="container">
			<?php if (have_posts()) : ?>
				<?php while(have_posts()) : the_post();?>
					<?php get_template_part('content'); ?>
					<?php if( is_tag( 'custom' )): ?>
						<?php get_template_part('category-custom'); ?>
					<?php endif; ?>
				<?php endwhile; ?>
	 		<?php else : ?>
				<p><?php __('No post found')?></p>
			<?php endif; ?>
		</div>
			<div class="player" id="player"></div>
			<script></script>
			 <script>
			      // 2. This code loads the IFrame Player API code asynchronously.
			      var tag = document.createElement('script');

			      tag.src = "https://www.youtube.com/iframe_api";
			      var firstScriptTag = document.getElementsByTagName('script')[0];
			      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

			      // 3. This function creates an <iframe> (and YouTube player)
			      //    after the API code downloads.
			      var player;
			      function onYouTubeIframeAPIReady() {
			        player = new YT.Player('player', {
			          height: '510',
			          width: '100%',
			          videoId: 'XjQvk_R20r4',
			          events: {
			            'onReady': onPlayerReady,
			            'onStateChange': onPlayerStateChange
			          }
			        });
			      }

			      // 4. The API will call this function when the video player is ready.
			      function onPlayerReady(event) {
			       // event.target.playVideo();
			      }

			      // 5. The API calls this function when the player's state changes.
			      //    The function indicates that when playing a video (state=1),
			      //    the player should play for six seconds and then stop.
			      var done = false;
			      function onPlayerStateChange(event) {
			        if (event.data == YT.PlayerState.PLAYING && !done) {
			          setTimeout(stopVideo, 6000);
			          done = true;
			        }
			      }
			      function stopVideo() {
			        player.stopVideo();
			      }
		    </script>
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