
                            <figure>
                                <a href="<?php the_permalink(); ?>" class="photo">

                                    <?php get_template_part('template-parts/blog/thumbnail'); ?>

                                </a>
            
                                <figcaption class="text-center">
                                    <div class="o-lead--third"><?= get_the_title(); ?></div>
                                    <div class="o-lead--fifth o-lead--dash o-lead--center"><?php the_time('d F Y'); ?></div>
                            
                                    <div class="o-text o-lead--fourth">
                                        
                                        <?php the_excerpt(); ?>
                                        
                                    </div>
                                </figcaption>
                            </figure>
        
                            <div class="text-center">
                                <a href="<?php the_permalink(); ?>" class="o-btn o-btn--primary">Czytaj więcej</a>
                            </div>
