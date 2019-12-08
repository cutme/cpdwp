
        <div class="c-top js-top">
            <div class="o-wrap">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="o-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-crystal.svg" width="238" height="27" alt="Crystal Aesthetic">
                </a>
                
                <nav class="c-nav js-nav">
                    <?php
                        wp_nav_menu( array(
                            'menu_class'      => 'c-nav__menu',
                            'theme_location'  => 'primary',
                        	'container'       => false,
                        ) );
                    ?>
                    
                    <?php get_template_part('template-parts/nav-social'); ?>
                </nav>
                
                <div class="c-hamburger js-hamburger"></div>
            </div>
        </div>

