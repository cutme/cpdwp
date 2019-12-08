
<?php if( have_rows('references') ): $g = 0; ?>

        <div class="c-references anim anim--up">
            <header class="text-center">
                <h2 class="o-crystalead o-crystalead--in"><?= get_field('references__title'); ?></h2>
            </header>

            <div class="o-section">                

                <div class="o-wrap">                    
                    <div class="glide" id="references">
                        <div class="glide__track" data-glide-el="track">
            
                            <ul class="glide__slides">
                            
                        <?php while( have_rows('references') ): the_row(); 
            
                                $text = get_sub_field('text');
                                $author = get_sub_field('author');
                        ?>
                            
                                <li class="glide__slide">
                                    <blockquote>
                                        <?= $text; ?>

                                        <span class="author"><?= $author; ?></span>
                                    </blockquote>
                                </li>
                                
                        <?php endwhile; ?>
                               
                            </ul>                            
                        </div>
                        
                        <div class="glide__bullets" data-glide-el="controls[nav]">
                        <?php while( have_rows('home_slider') ): the_row(); ?>
            
                            <button class="glide__bullet" data-glide-dir="=<?= $i ?>"></button>
                            
                        <?php $g ++; endwhile; ?>

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>


<?php endif; ?>