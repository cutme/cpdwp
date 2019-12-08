<?php
    
    $email = get_field('email', 'Options');
    $phone = str_replace(' ', '', get_field('phone', 'Options')); ?>
            
                <ul class="o-contactline">
    				<li>
    					<a href="tel:<?= $phone; ?>"><i class="icon-phone"></i> <span><?= $phone; ?></span></a>
    				</li>
    				
    				<li>
    					<a href="mailto:<?= $email; ?>"><i class="icon-envelope"></i> <span><?= $email; ?></span></a>
    				</li>
    			</ul>
