<?php if (!(current_user_can('level_0'))){
    
    $location=bloginfo('url') . "/login";
    
    wp_redirect( $location );
    exit;
    
}?>