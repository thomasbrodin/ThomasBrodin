<?php get_header(); ?>

		<div id="flexcroll" class="inner">	
			<div class="loading" style="margin-left:49%; margin-top: 25%; display: none; ">
					<img src="<?php echo get_template_directory_uri(); ?>/images/spinner.gif">
			</div>
			
			<div id="masonry">
				
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

   				<div <?php post_class('m_item'); ?>>

			          <?php
                       $name = $post->post_name;
                       $cat;
                       $categories = get_the_category();
                       if($categories){
                           foreach($categories as $category) {
                              //echo $category->slug;
                              if ($category->term_id != 3) { $cat = $category->slug; }
                           }

                       }
                       ?>

					<div class="m_item_inner"  onclick="window.location='<?php echo '/'.$cat.'/'.$name.'/'; ?>'">
						
						<div class="m_overlay">
							<h2><?php 
							$short_title = get_post_meta($post->ID, 'ecpt_shorttitle', $single = true);
							if ($short_title) {
								echo get_post_meta($post->ID, 'ecpt_shorttitle', $single = true);
								} else {
								the_title();
								} ?></h2>
                			
						</div>
							
						<?php 
							if(has_post_thumbnail()) { 
								$image_src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' ); 
								echo '<img src="' . $image_src[0] . '" class="lazy"/>'; 
								} 
						?>

						
 					</div>
					
		       </div>
			
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		
       		</div>
		
		</div> 
        
 
<?php get_footer(); ?>
