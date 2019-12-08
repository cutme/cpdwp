
                    <?php 
                        $intro = get_field('intro');
                        $subtitle = get_field('subtitle');
                    ?>

                        <div class="o-cols__item">
                            <a href="<?php the_permalink(); ?>" class="c-products__item">
                                <figure>
                                
                    <?php
                        if (has_post_thumbnail( $post->ID ) ):
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'product-thumb' );
                    ?>
                                    <img src="<?= $image[0]; ?>" alt="" width="390" height="370">
                    
                    <?php endif; ?>

                                    <div class="title">
                                        <h4 class="o-lead--third"><?= get_the_title(); ?></h4>
                                        
                                    <?php if ($subtitle) : ?>
                                        
                                        <p><?= $subtitle; ?></p>
                                    
                                    <?php endif; ?>

                                    </div>
                                    
                                    <figcaption>
                                        
                                        <?= $intro; ?>
                                        
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
