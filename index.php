<?php
    require("logincheck.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Vipie - Speelplein Zowiezo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">

        <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    
    <style>
        body{
            background: url('<?php bloginfo('template_url'); ?>/img/homepage2-bg.jpg');
            background-size: cover;
            background-position: 0%;
            background-attachment: fixed;
        }
        
        .middle-center{
            width: 960px;
            height: 70%;
            position: fixed;
            top: 15%;
            left: 50%;
            margin-left: -480px;
            text-align: center;
        }
        
        .logo{
            height: 40%;
        }
        
        .logo img{
            height: 100%;
            width: auto;
        }
        
        .menu-items{
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        
        .menu-items a{
            display: block;
            width: 25%;
            text-align: center;
            float: left;
            opacity: 0.8;
        }
        
        .menu-items a:hover{
            opacity: 1;
        }

        .future img{
            opacity: 0.4;
        }
        
    </style>
    
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="middle-center">
            <div class="logo">
                <img src="<?php bloginfo('template_url'); ?>/img/vipie300.png" />
            </div>
            <div class="menu-items">
                <?php query_posts(array('post_type' => 'page', 'order' => 'DESC', 'post_parent'=> 0, 'posts_per_page' => 1 )); ?>
				    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                        <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/vipie156.png" /></a>
				    <?php endwhile;?>
				    <?php endif; ?>
				    <?php wp_reset_query();  // Restore global post data ?>
                <a href="#" class="future"><img src="<?php bloginfo('template_url'); ?>/img/nieuws.png" /></a>
                <a href="#" class="future"><img src="<?php bloginfo('template_url'); ?>/img/calendar.png" /></a>
                <a href="#" class="future"><img src="<?php bloginfo('template_url'); ?>/img/archief.png" /></a>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
        
        <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
        <script>
            $('body').animate({
            'background-position-x': '100%',
          }, 100000, 'linear');
        </script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
