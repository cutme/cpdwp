<?php
	$args = array(
		'post_type' => 'post'
	);
	query_posts( $args );	
	
	$intro = get_field('intro', 143);
?>

<?php if ( have_posts() ) : $b = 0; ?>

        <div class="c-blog text-center">
            <div class="o-section">
                <div class="o-wrap">
                    
                    <header class="o-header text-center">
                        <h2 class="o-crystalead">Blog</h2>
                    
                    <?php if ($intro) : ?>

                        <?= $intro; ?>
                        
                    <?php endif ?>
                    
                    </header>
                    
                    <div class="o-cols o-cols--2p">


                <?php while ( have_posts() ) : the_post(); ?>
                    <?php if ($b <= 1 ) : ?>
                    
                    <div class="o-cols__item anim anim--<?php if($b % 2 == 0) { echo 'up'; } else { echo 'bottom'; } ?>">

                        <?php get_template_part('template-parts/content-blog'); ?>
                    
                    </div>

                    <?php $b ++; endif; ?>
                <?php endwhile; ?>


                    </div>
                </div>
            </div>
        </div>
        
<?php endif; ?>
<?php wp_reset_query(); ?>

