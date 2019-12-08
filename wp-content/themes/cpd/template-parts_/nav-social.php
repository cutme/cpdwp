<?php
    $facebook = get_field('facebook', 135);
    $instagram = get_field('instagram', 135);
    $linkedin = get_field('linkedin', 135);
?>

                    <ul class="c-nav__social">
                        <li>
                            <a href="<?= $facebook; ?>" class="icon-facebook"></a>
                        </li>
                        
                        <li>
                            <a href="<?= $instagram; ?>" class="icon-instagram"></a>
                        </li>
                        
                        <li>
                            <a href="<?= $linkedin; ?>" class="icon-linkedin"></a>
                        </li>
                    </ul>
