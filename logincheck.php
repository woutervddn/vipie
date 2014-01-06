<?php if (!(current_user_can('level_0'))){
    
    $location=bloginfo('template_url') . "/login.php";
    
    wp_redirect( $location );
    exit;
    
}?>