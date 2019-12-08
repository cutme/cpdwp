<?php get_header(); ?>


<?php get_template_part('template-parts/top-image')?>



<!--

        <div class="o-wrap">
		    <div class="o-section">
-->

                <div class="c-grid js-grid">

<?php get_template_part('template-parts/projects')?>

                </div>

                <div class="c-grid c-grid--pagination js-grid">
                    <div class="c-grid__item c-grid__item--nopadding anim anim--normal anim--left">
                        <a href="/" class="c-grid__item--more">
                            <div class="c-grid__underlink c-grid__underlink--left">
                                <i class="icon-arrow"></i> <span><?= get_the_title( 26 ); ?></span>
                            </div>
                        </a>
                    </div>
                    
                    <div class="c-grid__item anim anim--normal anim--right">
                        <a href="/services" class="c-grid__item--more">
                            <div class="c-grid__underlink c-grid__underlink--right">
                                <span><?= get_the_title( 36 ); ?></span> <i class="icon-arrow"></i>
                            </div>
                        </a> 
                    </div>
                </div>
            </div>
        </div>



<?php get_footer(); ?>
