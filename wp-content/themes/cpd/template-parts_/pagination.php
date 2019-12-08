<?php
    global $wp_query;
	$big = 999999999; // need an unlikely integer ?>
	
<?php

    $pages = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
        'prev_text'       => '<i class="icon-chevron-left"></i>',
        'next_text'       => '<i class="icon-chevron-right"></i>'
    ) );
    

    if ( is_array( $pages ) ) :
    
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged'); 
?>

                        <div class="c-pagination">
                                <ul>
<?php
        
                            foreach ( $pages as $page ) { ?>
            
                                <li><?php echo $page; ?></li>
<?php
                            }
?>

                            </ul>
                        </div>

<?php
    endif; ?>

