<?php
    //======================================================================
    // ACF Responsive Image
    //======================================================================
    function acf_responsive_image($image_id, $image_size, $max_width){
        if($image_id != '') {
            $image_src = wp_get_attachment_image_url( $image_id, $image_size );
            $image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );
            echo 'src="'.$image_src.'" srcset="'.$image_srcset.'" sizes="(max-width: '.$max_width.') 100vw, '.$max_width.'"';
        }
    }
?>
