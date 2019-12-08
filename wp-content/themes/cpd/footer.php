<?php

    $address = get_field('footer__address', 'Options');
    $other = get_field('footer__other', 'Options');
    
    $copyrights = $other['copyrights'];
    $rodo = $other['rodo'];
    $author = $other['author'];
    $opening = $other['opening'];
    
    $title = get_field('footer__title', 'Options');
    $lead = get_field('footer__lead', 'Options'); ?>

            <footer class="c-footer">
				<header class="o-header anim anim--up">
    				
    				<?php if ($title) : ?>
    				
					<h2 class="o-lead o-lead--1">Get in touch</h2>
					
					<?php endif; ?>
					
                    <?php get_template_part('template-parts/contactline'); ?>

				</header>


				<div class="c-footer__content">
    				
                    <?php if ($lead) : ?>
                    
					<h4 class="o-lead o-lead--4 anim anim--up">Colour Print Direct Ltd</h4>
					
					<?php endif; ?>

					<div class="o-cols o-cols--3 anim anim--delay1 anim--up">
						<div class="o-cols__item">
							<address>
								
    							<?php if ($address) : ?>
    							
    							<p><?= $address; ?>
    							
    							<?php endif; ?>	

							</address>
						</div>
						
						<div class="o-cols__item">
							<nav class="c-footer__nav">
								
								<?php
                                    wp_nav_menu( array(
                                        'container'       => 'ul',
                                        'menu_class'      => '',
                                        'theme_location'  => 'secondary',
                                    ) );
                                ?>
								
							</nav>
						</div>
						
						<div class="o-cols__item">
    						
                        <?php if ($copyrights) : ?>
    						
							<p class="copyrights"><?= $copyrights; ?></p>
							
                        <?php endif; ?>
                        <?php if ($rodo) : ?>
							
							<h6 class="o-lead--6"><?= $rodo; ?></h6>
							
                        <?php endif; ?>
                        <?php if ($author) : ?>							
							
							<h6 class="o-lead--6"><?= $author; ?></h6>
							
                        <?php endif; ?>

						</div>
					</div>
					
					<?php if ($opening) : ?>
					
					<div class="c-footer__opening anim anim--delay2 anim--up">
						<h6 class="o-lead--6"><?= $opening; ?></h6>
					</div>
					
					<?php endif; ?>
					
				</div>
			</footer>

