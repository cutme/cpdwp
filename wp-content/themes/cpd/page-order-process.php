<?php
/**
 * Template Name: Order process
 */
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

        <section class="c-welcome" id="welcome">
			<div class="o-container__left js-leftColumn">
    			
				<?php get_template_part('template-parts/sidebar'); ?>
				
			</div>
		
			<div class="o-container__right js-rightColumn bg-black">
    			
    			<?php get_template_part('template-parts/order-process'); ?>
    			
			</div>
        </section>


        <div class="o-container__left o-container__left--floating js-leftColumn">

			<?php get_template_part('template-parts/sidebar'); ?>

		</div>

<?php endwhile; ?>                                              
		
		<div class="o-container__right js-rightColumn">

			<?php get_template_part('template-parts/pages'); ?>
			<?php get_template_part('template-parts/references'); ?>
            <?php get_template_part('template-parts/blog'); ?>
            <?php get_footer(); ?>
		</div>
	</main>
	
	<?php get_template_part('template-parts/sidemenu'); ?>
    <?php get_template_part('template-parts/nav'); ?>


<?php wp_footer(); ?>

</body>
</html>
