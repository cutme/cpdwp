<?php
/**
 * Template Name: Blog
 */
get_header(); ?>

<?php
	$args = array(
		'post_type' => 'post',
	);
	
    $wp_query = new WP_Query($args);	
?>

<?php if ( $wp_query->have_posts() ) :  ?>

        <section class="c-welcome" id="welcome">
			<div class="o-container__left js-leftColumn">
    			
				<?php get_template_part('template-parts/sidebar'); ?>
				
			</div>
		
			<div class="o-container__right js-rightColumn bg-white">
    			
    			<div class="c-post c-post--page c-post--blog">
						
					<h1>Blog</h1>

					<div class="c-blog">
						<div class="o-cols o-cols--3">
							
							<?php while ( have_posts() ) : the_post(); ?>
							
							<?php get_template_part('template-parts/content/blog'); ?>
							
							<?php endwhile; ?>
							
						</div>
				            
					</div>
				</div>
    			
			</div>
        </section>

        <div class="o-container__left o-container__left--floating js-leftColumn">		
		
			<?php get_template_part('template-parts/sidebar'); ?>		
		</div>

<?php endif; ?>
<?php wp_reset_query(); ?>
		
		<div class="o-container__right js-rightColumn">


			<?php get_footer(); ?>
		</div>
	</main>
	
	<?php get_template_part('template-parts/sidemenu'); ?>
    <?php get_template_part('template-parts/nav'); ?>


<?php wp_footer(); ?>

</body>
</html>
