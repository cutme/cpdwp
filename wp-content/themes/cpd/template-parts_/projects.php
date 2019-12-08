
                    <div class="c-grid__item">
                        <article class="c-article u-dash">
                            <p>
<?= the_field('article'); ?>
                            </p>
                        </article>
                    </div> 
                    
<?php

    if (is_home() || is_front_page()) {
        $is_home = true;
        $ppp = get_option( 'posts_per_page' ) + 1;
    } else {
        $ppp = 999;
    }


    $args = array(
		'post_type' => 'post',
		'posts_per_page' => $ppp
	);
	query_posts( $args );
	
?>

<?php if ( have_posts() ) : $x = 0; ?>
    <?php while ( have_posts() ) : the_post(); 
        
        $concept = get_field('concept_design');
        $home = get_field('home');
    
        if ($concept[0] != 'yes') :
    ?>

    <?php if ($is_home) : ?>

        <?php if ($home) : $x ++; ?>
        <?php include get_template_directory() . '/template-parts/grid-item.php'; ?>
        <?php endif; ?>
    
    <?php else : $x ++; ?>

        <?php include get_template_directory() . '/template-parts/grid-item.php'; ?>
    
    <?php endif; ?>

    <?php endif; // concept ?>
    <?php endwhile; ?>
<?php endif; ?>
