
        <div class="c-team text-center">
            <div class="o-section">

<?php if( have_rows('section', 71) ): $l = 0; ?>
    <?php while( have_rows('section', 71) ): the_row(); ?>
        <?php if ( $l == 0 ) : ?>
    
                <header class="text-center">
                    <h2 class="o-crystalead o-crystalead--in"><?= get_sub_field('name') ;?></h2>
                </header>

        <?php if( have_rows('team') ): ?>
        
                <div class="o-wrap">
                    <div class="o-cols o-cols--2p">
                    
                    <?php while( have_rows('team') ): the_row(); 
                        
                        $image = get_sub_field('photo');
                        $image_photo = $image['sizes']['team'];
                        $image_alt = $image['alt'];
                        
                        $text = get_sub_field('text');
                        $text_name = $text['name'];
                        $text_description_1 = $text['description_1'];                       
                    ?>
                    
                        <div class="o-cols__item anim anim--up js-content">
                            <figure>
                                <div class="photo">
                                    <img src="<?= $image_photo; ?>" alt="<?= $image_alt; ?>" width="683" height="570">
                                </div>

                                <figcaption>
                                    <div class="o-lead--third"><?= $text_name; ?></div>
                            
                                    <div class="o-text o-lead--fourth text-center">

                                    <?= $text_description_1; ?>
                                    
                                    
                                </figcaption>
                            </figure>
    
                            <div class="text-center">
                                <a href="/kadra" class="o-btn o-btn--primary">Czytaj więcej</a>
                            </div>
                        </div>

                    <?php endwhile; ?>

                    </div>
                    </div>

        <?php endif; ?>

        <?php $l ++; endif; ?>
    <?php endwhile; ?>
<?php endif; ?>  

                </div>
            </div>
        </div>
