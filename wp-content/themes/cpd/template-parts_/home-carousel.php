
<?php if( have_rows('home_slider') ): $i = 0; ?>

    	<div class="glide c-slider" id="homeCarousel">
            <div class="glide__track" data-glide-el="track">
            
                <ul class="glide__slides">
            
            <?php while( have_rows('home_slider') ): the_row(); 
            
                $image = get_sub_field('photo');

        		$content = get_sub_field('text');
        		$firstline = $content['firstline'];
        		$secondline = $content['secondline'];
        		
        		$link = $content['link'];
        		$label = $content['label'];
        
            	$image_photo = $image['sizes']['slider'];
            ?>
            
                    <li class="glide__slide c-slider__item" style="background-image: url(<?php echo $image_photo ?>)">
                        <div class="o-wrap">
                            <div class="c-slider__text">
                                <p class="firstline"><?= $firstline; ?></p>
                                
                                <p class="secondline"><?= $secondline; ?></p>
                                
                                <div class="cta">
                                    <a href="<?= $link; ?>" class="o-btn o-btn--primary"><?= $label; ?></a>
                                </div>
                            </div>
                        </div>
                    </li>
            
            <?php endwhile; ?>            
            
                </ul>
            </div>

            <div class="glide__bullets" data-glide-el="controls[nav]">

            <?php while( have_rows('home_slider') ): the_row(); ?>
            
                <button class="glide__bullet" data-glide-dir="=<?= $i ?>"></button>
                
            <?php $i ++; endwhile; ?>

            </div>
            
            <div class="glide__arrows" data-glide-el="controls">
                <button class="glide__arrow icon-chevron-left glide__arrow--left" data-glide-dir="<"></button>
                <button class="glide__arrow icon-chevron-right glide__arrow--right" data-glide-dir=">"></button>
            </div>
    	</div>


<?php endif ?>
