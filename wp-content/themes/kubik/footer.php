<?php
/**
 * The template for displaying the footer
 */
?>
 <footer style="background-image: url(<?php bloginfo( 'template_directory' ); ?>/img/footer-bg.jpg);">
		<div class="wrap-form">
			<p>Like what you're reading? Get weekly updates that will help you grow as a man.</p>
			<form action="#" class="form">
				<input type="text" name="name" value="name">
				<input type="text" name="email" value="email">
				<div><input type="submit" name="submit" value="subscribe" class="submit"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>
			</form>
		</div>
	</footer>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<!-- <link rel="stylesheet" href="css/main.min.css"> -->
	<!-- <script src="https://use.fontawesome.com/24e0d8b0ae.js"></script> -->
	<!-- <script src="js/scripts.min.js"></script> -->
	<?php wp_footer();?>
</body>
</html>
