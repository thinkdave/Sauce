  	</div><!--/content-->

	<footer class="site-footer">
		<div class="colophon">
			<div class="container">
				<div class="row">
					<div class="col-sm">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
					<div class="col-sm">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div>
					<div class="col-sm">
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</div>
				</div><!--/row-->
			</div><!-- /container -->
		</div><!--/colophon-->
		<div class="footer-utility">
			<div class="container">
				<div class="row">
					<div class="col-sm copy">
						&copy <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>
					</div>
					<div class="col-sm designby">
						<a href="https://proofbranding.com" target="_blank">Finely Crafted by Proof Branding</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div><!--/page-->
<?php wp_footer(); ?>
</body>
</html>
