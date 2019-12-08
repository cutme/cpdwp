<?php
/**
 * Template Name: Products
 */
get_header(); ?>

<?php
    $args = array(
		'post_type' => 'produkt'
	);
	query_posts( $args );
	
	$intro = get_field('intro');
	
?>

<?php if ( have_posts() ) :?>

        <div class="c-products anim anim--up">
            <div class="o-section">
                <div class="o-wrap">
    
                    <div class="o-header o-header--main">
                        <h1 class="o-lead--first"><?php the_title(); ?></h1>
                        
                    <?php if ($intro) : ?>

                        <?= $intro; ?>
                        
                    <?php endif; ?>

                    </div>

                    <div class="o-cols o-cols--3">
                    
                    <?php while ( have_posts() ) : the_post();?>
                    
                        <?php get_template_part('template-parts/content-product'); ?>
                        
                    <?php endwhile; ?>
                        
                    </div>
                </div>
            </div>
        </div>

<?php endif; ?>
<?php wp_reset_query(); ?>


        <?php get_template_part('template-parts/contact-form')?>
        

<?php get_footer(); ?>
