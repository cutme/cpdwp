<?php
/**
 * Template Name: Contact
 */
 

if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
    wpcf7_enqueue_scripts();
}

if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
    wpcf7_enqueue_styles();
}

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

        <section class="c-welcome" id="welcome">
			<div class="o-container__left js-leftColumn">
    			
				<?php get_template_part('template-parts/sidebar'); ?>
				
			</div>

			<div class="o-container__right js-rightColumn bg-black">
    			
    			<div class="c-post c-post--page c-post--contact">
					<article class="o-article">

						<h1><?php the_title(); ?></h1>

<?php

    $address = get_field('footer__address', 'Options');
    $other = get_field('footer__other', 'Options');
    $opening = $other['opening']; 
    $email = get_field('email', 'Options');
    $phone = str_replace(' ', '', get_field('phone', 'Options')); ?>

					<?php if ($address) : ?>
    							
						<p><?= $address; ?></p>
						
					<?php endif; ?>	
						
						<p>    						
    						<a href="tel:<?= $phone; ?>"><?= $phone; ?></a><br>
    						<a href="mailto:<?= $email; ?>"><?= $email; ?></a><br>
                            <a href="http://www.colourprintdirect.com">www.colourprintdirect.com</a>
                        </p>
                    
                    <?php if ($opening) : ?>
                      
                        <p><?= $opening; ?></p>
                        
                    <?php endif; ?>

					</article>
				</div>
    			
			</div>
        </section>


        <div class="o-container__left o-container__left--floating js-leftColumn">

			<?php get_template_part('template-parts/sidebar'); ?>

		</div>

<?php endwhile; ?>                                              
		
		<div class="o-container__right js-rightColumn">

            <?php get_template_part('template-parts/contactform'); ?>

            <div class="c-map js-map" data-lat="<?php the_field('lat'); ?>" data-lng="<?php the_field('lng'); ?>"></div>

			<?php get_footer(); ?>
		</div>
	</main>
	
	<?php get_template_part('template-parts/sidemenu'); ?>
    <?php get_template_part('template-parts/nav'); ?>


<?php wp_footer(); ?>

</body>
</html>
