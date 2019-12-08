<?php 

$images = get_field('gallery');

if( $images ): ?>

        <div class="c-gallery anim anim--up">
            <div class="o-section">
                              
                <div class="o-wrap">
                
                    <ul class="c-gallery__items">
                    
        <?php foreach( $images as $image ): ?>
        
                        <li>
                            <a href="<?php echo $image['sizes']['gallery-big']; ?>" class="js-image">
                                 <img src="<?php echo $image['sizes']['gallery-thumb']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </a>
                        </li>
                        
        <?php endforeach; ?>
    
                    </ul>
                </div>
            </div>
        </div>

    
<?php endif; ?>

       