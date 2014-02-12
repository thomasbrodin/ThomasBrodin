<?php get_header(); ?>


	
	<div id="flexcroll" class="inner">	
		<div class="loading" style="margin-left:42%; margin-top: 25%; display: none; ">
			<img src="<?php echo get_template_directory_uri(); ?>/images/spinner.gif">
		</div>
		<div id="masonry">

			<?php 
				Timber::render('post-portfolio.twig');
			?>
		</div>	
	</div>
	

    
 
<?php get_footer(); ?>
