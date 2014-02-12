<?php get_header(); ?>
			
	<div class = 'container'>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php
        $cat=curPageCat();
        $idObj = get_category_by_slug($cat);
        $cat_ID = $idObj->term_id;
        $prev = apto_get_adjacent_post( FALSE, $cat_ID,'category',FALSE )->post_name;
        $next = apto_get_adjacent_post( FALSE, $cat_ID,'category',TRUE )->post_name;

        ?>

        <div class="post-nav">
            <div class="post-prev">
                <?php
                if($prev!=''){
                    echo '<a href="/'.$cat.'/'.$prev.'/">previous</a>';
                };
                ?>
            </div>
            <div class="post-next">
                <?php
                if($next!='' && $prev!=''){
                    echo '<a href="/'.$cat.'/'.$next.'/">next project</a>';
                	} 
				elseif ($next!='' && $prev==0){
					echo '<a href="/'.$cat.'/'.$next.'/" style="padding-top:20px">next project</a>';
					}
			 	else {
							
						}
				?>
            </div>
        </div>




				<div id ="SliderContainer">


                    <div class = 'slider'>

                    <?php $images = hex_get_image_attachments(); ?>
                    <?php 	if ($images) { ?>
                    <?php foreach ($images as $image) : ?>

                        <div class = 'slide'>
							
                             <img src="<?php echo $image['large']['src']; ?>">
							<div class='caption'>
								<h2><?php echo $image['caption']; ?><h2>
							</div>	
                        </div>
						
						
						<?php endforeach;
							} else { ?>
								<img src="<?php bloginfo('template_directory'); ?>/images/image-needed.png" alt="Image Needed" />
						<?php }  ?>



					</div>
					<?php endwhile; else: ?>

						<p>Not found.</p>

					<?php endif; ?>
				</div>


				
	</div>
<?php get_footer(); ?>