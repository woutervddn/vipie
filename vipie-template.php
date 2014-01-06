<?php
/*
Template Name: Vipie Template
*/
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Deze Vipie</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">

        <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    
    <style>
        body{
            background: url('<?php bloginfo('template_url'); ?>/img/deze-vipie-bg.jpg');
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
            width: 360px;
        }
        .logo h1 span{
            background: white;
            color: black;
            line-height: 60px;
            height: 60px;
            width: 60px;
            display: inline-block;
            border-radius: 30px;
        }
        
        footer{
            position: absolute;
            bottom: 0px;
            height: 162px;
            background: rgba(255,255,255,0.3);
            width: 100%;
        }
        
        .home-button-wrapper{
            height: 120px;
            padding-top: 21px;
            padding-left: 21px;
            float: left;
        }
        
        .article-list{
            height: 120px;
            width: 60%;
            overflow-x: hidden;
            position: relative;
            float: left;
            display: inline-block;
        }
        .article-wrapper{
            width: 70%;
            text-align: center;
            float: right;
            margin-top: 24px;
        }
        .article-list ul{
            width: auto;
            height: 100%;
            display: block;
            padding: 0px;
            margin: 0 auto;
            white-space: nowrap;
        }
        .article-list ul li{
            display: inline-block;
            height: 100%;
            width: 120px;   
            margin: 0 12px;
        }
        .button{
            float: left;
            display: block;
            height: 120px;
            width: 23px;
            background: url("<?php bloginfo('template_url'); ?>/img/arrows.png");
            background-repeat: no-repeat;
            opacity: 0.6;
        }
        .button:hover{
            opacity: 1;
        }
        #before{
            background-position: bottom;
        }
        #after{
            background-position: top;
            margin-left: 12px;
        }
        
    </style>
    
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="middle-center">
            <div class="logo">
                <img src="<?php bloginfo('template_url'); ?>/img/vipie-nocircle.png" />
                <h1><span>1</span></h1>
            </div>            
        </div>
        
        <footer>
            <div class="home-button-wrapper">
                <a href="/"><img src="<?php bloginfo('template_url'); ?>/img/vipie120.png" /></a>
            </div>
            <div class="article-wrapper">
                <a class="button" id="before" href="#"></a>
                <div class="article-list">
                    <ul>
                        <li><a href="#"><img src="http://placehold.it/120x120" /></a></li>
                        <li><a href="#"><img src="http://placehold.it/120x120" /></a></li>
                        <li><a href="#"><img src="http://placehold.it/120x120" /></a></li>
                        <li><a href="#"><img src="http://placehold.it/120x120" /></a></li>
                        <li><a href="#"><img src="http://placehold.it/120x120" /></a></li>
                        <li><a href="#"><img src="http://placehold.it/120x120" /></a></li>
                        <li><a href="#"><img src="http://placehold.it/120x120" /></a></li>
                        <li><a href="#"><img src="http://placehold.it/120x120" /></a></li>
                        <li><a href="#"><img src="http://placehold.it/120x120" /></a></li>
                        <li><a href="#"><img src="http://placehold.it/120x120" /></a></li>
                        <li><a href="#"><img src="http://placehold.it/120x120" /></a></li>
                        <li><a href="#"><img src="http://placehold.it/120x120" /></a></li>
                        <li><a href="#"><img src="http://placehold.it/120x120" /></a></li>
                        <li><a href="#"><img src="http://placehold.it/120x120" /></a></li>
                        <li><a href="#"><img src="http://placehold.it/120x120" /></a></li>
                        <li><a href="#"><img src="http://placehold.it/120x120" /></a></li>
                        <li><a href="#"><img src="http://placehold.it/120x120" /></a></li>
                        <li><a href="#"><img src="http://placehold.it/120x120" /></a></li>
                        <li><a href="#"><img src="http://placehold.it/120x120" /></a></li>
                        <li><a href="#"><img src="http://placehold.it/120x120" /></a></li>
                    </ul>
                </div>
                <a class="button" id="after" href="#"></a>
            </div>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
        
        <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
        <script>
            $(".button").click(function(){
                if ($(this).attr('id')=="after") {
                    var leftPos = $('.article-list').scrollLeft();
                    $(".article-list").animate({scrollLeft: leftPos + 200}, 800);
                }else{
                    var leftPos = $('.article-list').scrollLeft();
                    $(".article-list").animate({scrollLeft: leftPos - 200}, 800);
                }
            });
        </script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
