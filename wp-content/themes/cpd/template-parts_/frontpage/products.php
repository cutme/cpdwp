<?php
    $args = array(
		'post_type' => 'produkt'
	);
	query_posts( $args );	
	
	$intro = get_field('intro', 140);
?>

<?php if ( have_posts() ) : $p = 0; ?>

        <div class="c-products anim anim--up">
            <div class="o-section">
                <div class="o-wrap">

                    <header class="o-header text-center">
                        <h2 class="o-crystalead">Produkty</h2>
                    
                    <?php if ($intro) : ?>

                        <?= $intro; ?>
                        
                    <?php endif ?>
                    
                    </header>
                    
                    <div class="o-cols o-cols--3">


                <?php while ( have_posts() ) : the_post(); ?>
                    <?php if ($p <= 2 ) : ?>
                    
                    <?php get_template_part('template-parts/content-product'); ?>
                    
                    <?php $p ++; endif; ?>
                <?php endwhile; ?>


                    </div>
                </div>
            </div>
        </div>
        
<?php endif; ?>
<?php wp_reset_query(); ?>
