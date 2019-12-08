<?php

    $top_image = get_field('top_image');
    
    $size_big = 'big-image';
	$size_medium = 'medium-image';
	$size_normal = 'normal-image';
	$size_small = 'small-image';


    if( !empty($top_image) ) : 
    
        $url = $top_image['url'];
    	$title = $top_image['title'];
    	$alt = $top_image['alt'];

    	$thumb_big = $top_image['sizes'][ $size_big ];
    	$thumb_medium = $top_image['sizes'][ $size_medium ];
    	$thumb_normal = $top_image['sizes'][ $size_normal ];
    	$thumb_small = $top_image['sizes'][ $size_small ];
    ?>

        <div class="c-picture c-picture--top js-fullHeight">
            <picture class="lazyload">
				<source data-srcset="<?= $thumb_big; ?>" media="(min-width: 1680px)">
				<source data-srcset="<?= $thumb_medium; ?>" media="(min-width: 1440px)">
				<source data-srcset="<?= $thumb_normal; ?>" media="(min-width: 1024px)">
				
				<img 
				    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
				    data-srcset="<?= $thumb_small; ?>" 
				    class="lazyload" 
				    alt="<?= $alt; ?>">
			</picture>
        </div>

<?php endif; ?>


<?php //if ( have_posts() ) : ?>
    
        <div class="o-wrap index-up">
            <div class="o-section">
            
            <?php
                $mainlead = get_field('main_lead');
            
                if ($mainlead) :
            
            ?>
            
             <?php //while ( have_posts() ) : the_post(); ?>
    		    <div class="o-header">
    		        <h1 class="o-header__primary">
                        <?= $mainlead; ?>
    		        </h1>
    		    </div>
    		    
            <?php
                endif; ?>
            
            <?php
                $desc = get_field('top_description');
                
                if ($desc) :
            ?>
            
                <article class="c-article u-dash">
                
                    <p>
                        <?php the_field('top_description'); ?>
                    </p>
                    
                </article>
                
            <?php
                endif; ?>
                
            <?php //endwhile; ?>
<!--
            </div>
        </div>
-->
<?php //endif; ?>





<?php
    $args = array(
		'post_type' => 'services'
	);
	query_posts( $args );
	
?>

<?php if ( have_posts() ) : $z = 0; ?>
    <?php while ( have_posts() ) : the_post(); $z ++; ?>

                    <div class="c-grid__item lazyload <?php if ($z != 1) echo 'anim anim--up anim--out'; ?>">
                        <a href="<?php the_permalink(); ?>">

<?php
    if (has_post_thumbnail( $post->ID ) ):
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' );
?>

                            <div class="image atvImg">
                                <img src="<?= $image[0]; ?>" alt="" width="600" height="730">
    							<div class="atvImg-layer" data-img="<?= $image[0]; ?>"></div>
                    		</div>

<?php
    endif;
?>    
                            <p class="c-grid__caption c-grid__caption--lead c-grid__caption--services"><?= get_the_title(); ?></p>
                        </a> 
                    </div>

    <?php endwhile; ?>
<?php endif; ?>








    <div class="c-grid__item lazyload <?php if ($x != 1) echo 'anim anim--up anim--out'; ?>">
                        <a href="<?php the_permalink(); ?>">

<?php
    if (has_post_thumbnail( $post->ID ) ):
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' );
        $subtitle = get_field('subtitle');
?>

                            <div class="image atvImg">
                                <img src="<?= $image[0]; ?>" alt="" width="600" height="730">
    							<div class="atvImg-layer" data-img="<?= $image[0]; ?>"></div>
                    		</div>

<?php
    endif;
?>    
                            <p class="c-grid__caption c-grid__caption--lead"><?= get_the_title(); ?></p>
                            
                            <?php if ($subtitle) : ?>
                            
                            <p class="c-grid__caption c-grid__caption--more"><?= $subtitle; ?></p>

                            <?php endif;  ?>
    
    
                            
                        </a> 
                    </div>




