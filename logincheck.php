<?php if (!(current_user_can('level_0'))){
    
    $location=bloginfo('url') . "/login.php";
    
    wp_redirect( $location );
    exit;
    
}?>