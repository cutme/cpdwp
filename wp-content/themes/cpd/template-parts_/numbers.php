
<?php if( have_rows('numbers') ): $i = 0; ?>

        <div class="c-numbers anim anim--up">
            <div class="o-section">
                <div class="o-wrap">
                
                    <ul class="c-numbers__items">
                    
        <?php while( have_rows('numbers') ): the_row(); 
            
                $name = get_sub_field('name');
                $number = get_sub_field('number');
                
                
                switch ($i) {
                    case 0:
                        $icon = 'portfolio';
                        break;
                    case 1:
                        $icon = 'like';
                        break;
                    case 2:
                        $icon = 'clock';
                        break;
                    case 3:
                        $icon = 'star';
                        break;
                }
        ?>

                        <li>
                            <i class="icon-<?= $icon; ?>"></i>
                            <p class="num"><span class="js-count" data-count="<?= $number; ?>">&nbsp;</span></p>
                            <p class="info"><?= $name; ?></p>
                        </li>

        <?php $i++; endwhile; ?>

                    </ul>
                
                </div>
            </div>
        </div>

<?php endif; ?>
