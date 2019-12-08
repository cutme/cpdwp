
        <div class="c-video anim anim--up">
            <div class="o-section">
                <div class="o-wrap">
                    
                    <header class="o-header text-center">
                        <h2 class="o-crystalead"><?= get_the_title(98); ?></h2>
                        
                        <p><?= get_field('intro', 98); ?></p>
                        
                    </header>

<?php
    $video = get_field('video', 98);
    $video_url = $video['video__url'];
    $video_image = $video['video__image'];
    
    $video_image_photo = $video_image['sizes']['video'];
    $video_image_alt = $video_image['alt'];
?>
                    <a href="<?= $video_url; ?>" class="c-video__item js-video">
                        <img src="<?= $video_image_photo; ?>" alt="<?= $video_image_alt; ?>" width="1170" height="570">
                        <i class="play"></i>
                    </a>
                </div>
            </div>
        </div>
