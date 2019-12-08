
                    <?php
                        if (has_post_thumbnail( $post->ID ) ):
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'blog-big' );
                    ?>
                                    <img src="<?= $image[0]; ?>" alt="">
                    
                    <?php endif; ?>
