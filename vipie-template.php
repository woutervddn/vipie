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
        body{
            background-size: cover;
            background-position: 0%;
            background-attachment: fixed;
            overflow: hidden;
        }
        
        footer{
            position: absolute;
            bottom: -150px;
            height: 162px;
            background: #333;
            width: 100%;
        }
        
        .home-button-wrapper{
            position: absolute;
            bottom: 21px;
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
        .article-container{
            height: 100%;
            width: 100%;
            position: relative;
        }
        .paper-container{
            overflow: hidden;
        }
        article{
            background: rgba(0,0,0,0.5);
            color: white;
            width: 27%;
            max-height: 70%;
            overflow-x: hidden;
            overflow-y: scroll;
            padding: 17px 17px;
            /*border-bottom: 17px solid rgba(0,0,0,0);*/
            /*border-top: 17px solid rgba(0,0,0,0);*/
            position: absolute;
            top: 7%;
            right: 5%;
            margin-bottom: 20px;
        }
/*    WE MIGHT WANT TO IMPLEMENT A JS SCROLLBAR... :/     */
                    /*Chrome scrollbar*/
            article::-webkit-scrollbar { width: 15px; right: -20px; border: none;}
            article::-webkit-scrollbar-button {  display: none; background-color: #FFF; }
            article::-webkit-scrollbar-track { background-color: rgba(0,0,0,0.3); border: none;}
            article::-webkit-scrollbar-track-piece { display: none; background-color: rgba(0,0,0,0.3);}
            article::-webkit-scrollbar-thumb { height: 150px; background-color: #FFF; border-radius: 0; border: none;}
            article::-webkit-scrollbar-corner { display: none; background-color: #999;}}
            article::-webkit-resizer { display: none; background-color: #666;}
        
        article .title{
            font-weight: bold;
            font-size: 28px;
        }
        
        article p{
            font-size: 20px;
        }
        .article-container{
            float:left;
        }
        
    </style>
    
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        
        
        
        <div class="paper-container">
            <div class="paper">
                <?php $parent=$post->ID; ?>
                <?php wp_reset_query();  // Restore global post data ?>
                <?php query_posts(array('post_type' => 'page', 'order' => 'ASC', 'child_of' => $parent, 'exclude' => $parent )); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php if($post->ID != $parent) : ?>
                            <div class="article-container" style="background: url('<?php bloginfo('template_url'); ?>/img/artikel-bg.jpg');" id="<?php echo $post->ID; ?>">
                                <article style="z-index:9999;">
                                    <div class="title"><?php the_title(); ?></div>
                                    
                                    <?php if( function_exists('dfiGetFeaturedImages') ) {
                                        $featuredImages = dfiGetFeaturedImages();
                                        echo "works";
                                        print_r($featuredImages);
                                    } ?>
                                    
                                    <?php the_content(); ?>
                                </article>
                            </div>
                        <?php endif; ?>
                    <?php endwhile;?>
		<?php endif; ?>
                <?php wp_reset_query();  // Restore global post data ?>
                
                
                    <!--<article style="z-index:9999;">
                        <div class="title">Retrospect: Hanne's avonturen in Portugal.</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in sagittis urna. Vestibulum gravida id ante ut elementum. Quisque lectus tortor, cursus at ligula nec, lobortis blandit quam. Fusce iaculis arcu mi. Fusce fermentum, dui ut congue bibendum, lectus mi varius nisl, ut venenatis neque lacus nec sapien. Cras suscipit quam nulla, ac adipiscing nulla consectetur a. Curabitur ultrices sit amet ante in fermentum. Aliquam erat volutpat. Suspendisse et lobortis leo, sit amet vestibulum mauris. Nunc lacinia aliquam odio.
                        </p><p>
            In hac habitasse platea dictumst. Suspendisse potenti. Sed vel velit lacus. Integer et leo vitae est tristique vehicula at eu magna. Donec rhoncus semper justo, eu varius felis ornare blandit. Curabitur purus purus, porta nec quam sed, ultrices pulvinar metus. Donec eget libero imperdiet, viverra massa at, pretium nunc. Cras tincidunt tortor vitae nisl facilisis, mattis suscipit metus cursus. Ut pellentesque dictum diam, vel suscipit nisl egestas non. Suspendisse non augue at justo fringilla fermentum. Nullam euismod libero a neque mollis elementum.</p><p>
            In hac habitasse platea dictumst. Suspendisse potenti. Sed vel velit lacus. Integer et leo vitae est tristique vehicula at eu magna. Donec rhoncus semper justo, eu varius felis ornare blandit. Curabitur purus purus, porta nec quam sed, ultrices pulvinar metus. Donec eget libero imperdiet, viverra massa at, pretium nunc. Cras tincidunt tortor vitae nisl facilisis, mattis suscipit metus cursus. Ut pellentesque dictum diam, vel suscipit nisl egestas non. Suspendisse non augue at justo fringilla fermentum. Nullam euismod libero a neque mollis elementum.</p>
                    </article>
                </div>
                <div class="article-container" style="background: url('<?php bloginfo('template_url'); ?>/img/artikel-bg.jpg');" id="2">
                    <article style="z-index:9999;">
                        <div class="title">Retrospect: Hanne's avonturen in Portugal.</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in sagittis urna. Vestibulum gravida id ante ut elementum. Quisque lectus tortor, cursus at ligula nec, lobortis blandit quam. Fusce iaculis arcu mi. Fusce fermentum, dui ut congue bibendum, lectus mi varius nisl, ut venenatis neque lacus nec sapien. Cras suscipit quam nulla, ac adipiscing nulla consectetur a. Curabitur ultrices sit amet ante in fermentum. Aliquam erat volutpat. Suspendisse et lobortis leo, sit amet vestibulum mauris. Nunc lacinia aliquam odio.
                        </p><p>
            In hac habitasse platea dictumst. Suspendisse potenti. Sed vel velit lacus. Integer et leo vitae est tristique vehicula at eu magna. Donec rhoncus semper justo, eu varius felis ornare blandit. Curabitur purus purus, porta nec quam sed, ultrices pulvinar metus. Donec eget libero imperdiet, viverra massa at, pretium nunc. Cras tincidunt tortor vitae nisl facilisis, mattis suscipit metus cursus. Ut pellentesque dictum diam, vel suscipit nisl egestas non. Suspendisse non augue at justo fringilla fermentum. Nullam euismod libero a neque mollis elementum.</p><p>
            In hac habitasse platea dictumst. Suspendisse potenti. Sed vel velit lacus. Integer et leo vitae est tristique vehicula at eu magna. Donec rhoncus semper justo, eu varius felis ornare blandit. Curabitur purus purus, porta nec quam sed, ultrices pulvinar metus. Donec eget libero imperdiet, viverra massa at, pretium nunc. Cras tincidunt tortor vitae nisl facilisis, mattis suscipit metus cursus. Ut pellentesque dictum diam, vel suscipit nisl egestas non. Suspendisse non augue at justo fringilla fermentum. Nullam euismod libero a neque mollis elementum.</p>
                    </article>
                </div>
                <div class="article-container" style="background: url('<?php bloginfo('template_url'); ?>/img/artikel-bg.jpg');" id="3">
                    <article style="z-index:9999;">
                        <div class="title">Retrospect: Hanne's avonturen in Portugal.</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in sagittis urna. Vestibulum gravida id ante ut elementum. Quisque lectus tortor, cursus at ligula nec, lobortis blandit quam. Fusce iaculis arcu mi. Fusce fermentum, dui ut congue bibendum, lectus mi varius nisl, ut venenatis neque lacus nec sapien. Cras suscipit quam nulla, ac adipiscing nulla consectetur a. Curabitur ultrices sit amet ante in fermentum. Aliquam erat volutpat. Suspendisse et lobortis leo, sit amet vestibulum mauris. Nunc lacinia aliquam odio.
                        </p><p>
            In hac habitasse platea dictumst. Suspendisse potenti. Sed vel velit lacus. Integer et leo vitae est tristique vehicula at eu magna. Donec rhoncus semper justo, eu varius felis ornare blandit. Curabitur purus purus, porta nec quam sed, ultrices pulvinar metus. Donec eget libero imperdiet, viverra massa at, pretium nunc. Cras tincidunt tortor vitae nisl facilisis, mattis suscipit metus cursus. Ut pellentesque dictum diam, vel suscipit nisl egestas non. Suspendisse non augue at justo fringilla fermentum. Nullam euismod libero a neque mollis elementum.</p><p>
            In hac habitasse platea dictumst. Suspendisse potenti. Sed vel velit lacus. Integer et leo vitae est tristique vehicula at eu magna. Donec rhoncus semper justo, eu varius felis ornare blandit. Curabitur purus purus, porta nec quam sed, ultrices pulvinar metus. Donec eget libero imperdiet, viverra massa at, pretium nunc. Cras tincidunt tortor vitae nisl facilisis, mattis suscipit metus cursus. Ut pellentesque dictum diam, vel suscipit nisl egestas non. Suspendisse non augue at justo fringilla fermentum. Nullam euismod libero a neque mollis elementum.</p>
                    </article>
                </div>
                <div class="article-container" style="background: url('<?php bloginfo('template_url'); ?>/img/artikel-bg.jpg');" id="4">
                    <article style="z-index:9999;">
                        <div class="title">Retrospect: Hanne's avonturen in Portugal.</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in sagittis urna. Vestibulum gravida id ante ut elementum. Quisque lectus tortor, cursus at ligula nec, lobortis blandit quam. Fusce iaculis arcu mi. Fusce fermentum, dui ut congue bibendum, lectus mi varius nisl, ut venenatis neque lacus nec sapien. Cras suscipit quam nulla, ac adipiscing nulla consectetur a. Curabitur ultrices sit amet ante in fermentum. Aliquam erat volutpat. Suspendisse et lobortis leo, sit amet vestibulum mauris. Nunc lacinia aliquam odio.
                        </p><p>
            In hac habitasse platea dictumst. Suspendisse potenti. Sed vel velit lacus. Integer et leo vitae est tristique vehicula at eu magna. Donec rhoncus semper justo, eu varius felis ornare blandit. Curabitur purus purus, porta nec quam sed, ultrices pulvinar metus. Donec eget libero imperdiet, viverra massa at, pretium nunc. Cras tincidunt tortor vitae nisl facilisis, mattis suscipit metus cursus. Ut pellentesque dictum diam, vel suscipit nisl egestas non. Suspendisse non augue at justo fringilla fermentum. Nullam euismod libero a neque mollis elementum.</p><p>
            In hac habitasse platea dictumst. Suspendisse potenti. Sed vel velit lacus. Integer et leo vitae est tristique vehicula at eu magna. Donec rhoncus semper justo, eu varius felis ornare blandit. Curabitur purus purus, porta nec quam sed, ultrices pulvinar metus. Donec eget libero imperdiet, viverra massa at, pretium nunc. Cras tincidunt tortor vitae nisl facilisis, mattis suscipit metus cursus. Ut pellentesque dictum diam, vel suscipit nisl egestas non. Suspendisse non augue at justo fringilla fermentum. Nullam euismod libero a neque mollis elementum.</p>
                    </article>-->
                </div>
            </div>
        </div>
        
        
        
        
        <footer>
            <div class="article-wrapper">
                <a class="button" id="before" href="#"></a>
                <div class="article-list">
                    <ul>
                        <li><a href="#1"><img src="http://placehold.it/120x120" /></a></li>
                        <li><a href="#2"><img src="http://placehold.it/120x120" /></a></li>
                        <li><a href="#3"><img src="http://placehold.it/120x120" /></a></li>
                        <li><a href="#4"><img src="http://placehold.it/120x120" /></a></li>
                    </ul>
                </div>
                <a class="button" id="after" href="#"></a>
            </div>
        </footer>
        <div class="home-button-wrapper">
            <a href="/"><img src="<?php bloginfo('template_url'); ?>/img/vipie120.png" /></a>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
        
        <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
        <script>
            $(document).ready(function(){
                $(".article-container").css({"height":$( window ).height(),"width":$( window ).width()});
                $(".paper-container").css({"height":$( window ).height(),"width":$( window ).width()});
                
                listcontentitems="";
                listitems=0;
                $(".article-container").each(function(){
                    listitems++;
                    listcontentitems+="<li><a href=\"#" + $(this).attr("id") + "\"><img src=\"http://placehold.it/120x120\" /></a></li>"
                });
                $(".article-list ul").html(listcontentitems);
                $(".paper").css({"height":$( window ).height(),"width":$( window ).width() * listitems});
            })
            
            $(".button").click(function(event){
                event.preventDefault();
                if ($(this).attr('id')=="after") {
                    var leftPos = $('.article-list').scrollLeft();
                    $(".article-list").animate({scrollLeft: leftPos + 200}, 800);
                }else{
                    var leftPos = $('.article-list').scrollLeft();
                    $(".article-list").animate({scrollLeft: leftPos - 200}, 800);
                }
            });
            
            $(".article-list ul").on('click', 'li a', function(event){
                event.preventDefault();
                object = $(this);
                theArticleId = object.attr("href");
                theArticlePosition = $(".article-container" + theArticleId).position().left;
                theScroll = theArticlePosition + $(".paper-container").scrollLeft();
                console.log($(".paper-container").scrollLeft() +" to "+theArticlePosition+" = "+theScroll );
                $(".paper-container").animate({scrollLeft: theScroll}, 800);
                
            });
            
            footerup = false;
            $("footer").hover(function(){
                if (footerup==false) {
                    footerup = true;
                    $("footer").css({backgroundColor: "rgba(255,255,255,0.3)"});
                    $("footer").animate({bottom: 0}, 200);
                }
            },function(){
                if (footerup==true) {
                    footerup = false;
                    $("footer").animate({bottom: -150}, 200, function(){
                        $("footer").css({backgroundColor: "#333333"});
                    });
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