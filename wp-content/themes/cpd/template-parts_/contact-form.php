<?php
    $intro = get_field('intro', 135);
?>
        
        <div class="c-contact bg-gray anim anim--up">
            <div class="o-section">
                <div class="o-wrap">
                    
                    <header class="o-header text-center">
                        <h2 class="o-lead--second">Skontakuj się z&nbsp;nami</h2>
                        
                        <?php if ($intro) : ?>
                        
                        <?php echo $intro; ?>
                        
                        <?php endif; ?>
                    </header>
                    
                    <div class="c-contact__form">
                        
                        <?php echo do_shortcode( '[contact-form-7 id="201" title="Formularz 1"]' ); ?>
                        
                    </div>
                </div>
            </div>
        </div>
