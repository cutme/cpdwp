
<?php if( have_rows('socials', 'option') ): $i = 1; ?>

        <div class="c-opinions" id="opinions">
            <div class="siema">
    
        <?php while( have_rows('opinions', 'option') ): the_row(); 
            $photo = get_sub_field('photo');
            $name = get_sub_field('name');
            $position = get_sub_field('position');
            $link = get_sub_field('link');
            $opinion = get_sub_field('opinion');
        ?>
                <div class="c-opinions__slide">
                    <div class="c-opinions__author">
                    
                    <?php if ($photo) : 

                        $size = 'adviser';  
                        $thumb = $photo['sizes'][ $size ];                      
                        
                    ?>
                        <img src="<?= $thumb; ?>" alt="avatar" width="130" height="124">
                    <?php endif; ?>

                        <p class="c-opinions__name"><?= $name; ?></p>
                        <p class="c-opinions__position"><?= $position; ?> <?php if ($link): ?> · <a href="<?php echo $link['url']; ?>" target="_blank"><?php echo $link['title']; ?></a></p> <?php endif; ?>
                    </div>
                    
                    <blockquote>
                        <p>
                            “<?= $opinion; ?>” 
                        </p>
                    </blockquote>
                </div>
            
        <?php $i++; endwhile; ?>
        
            </div>
            
            <div class="c-opinions__nav">
                <span class="icon-arrow-nav prev js-prev"></span>
                <span class="icon-arrow-nav next js-next"></span>
            </div>
        </div>

    <?php endif; ?>
