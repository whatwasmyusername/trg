<?php

function selfHost(){
    $protocol = $_SERVER['REQUEST_SCHEME'];
    $port = ($_SERVER['SERVER_PORT'] == '80' || $_SERVER['SERVER_PORT'] == '443') ? '' : (':'.$_SERVER['SERVER_PORT']); 
    return $protocol.'://'.$_SERVER['SERVER_NAME'].$port;
}

function selfURL() 
{ 
    return selfHost().explode('?', $_SERVER['REQUEST_URI'])[0]; 
} 

?><!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Tis' the Season for Giving</title>
	<meta property="og:url"                content="<?php echo selfURL()?>" />
    <meta property="og:title"              content="Tis' the Season for Giving" />
    <meta property="og:description"        content="When you click, Westfield will give" />
    <meta property="og:image"              content="<?php echo selfHost()?>/images/tis-the-season-to-give.jpg" />
    <meta name="description" content="When you click, Westfield will give">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css/normalize.min.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<?php
$message = urlencode("Tis' the Season for Giving");
$this_page = urlencode(selfURL());
?>
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="header-container">
        <div class="padded">
            <div class="align-right">
                <a data-dialog-width="640" data-dialog-height="480" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $this_page ?>&title=<?php echo $message ?>" class="fa fa-facebook" target="_blank"><span class="hidden">Facebook</span></a>
                <a data-dialog-width="480" data-dialog-height="240" href="https://twitter.com/intent/tweet?text=<?php echo $message ?>&url=<?php echo $this_page?>" class="fa fa-twitter" target="_blank"><span class="hidden">Twitter</span></a>
                <a href="mailto:?subject=<?php echo $message?>&body=<?php echo $this_page?>" class="fa fa-envelope" target="_blank"><span class="hidden">Email</span></a>
            </div>
            <header class="clearfix">
                <h1 class="title">Wrap the world in loving care this season.</h1>
                <h2 class="sub-tite">Ring the bell and Westfield will give.</h2>
            </header>
        </div>
    </div>

    <div class="main-container">
        <div class="main clearfix">

            <article>
                <header>
                    <video width="960" controls autoplay>
                      <source src="https://92c0a8860ed6f96fc90a-fecc07f2a991d0d68587de6370f58cc5.ssl.cf2.rackcdn.com/Westfield_v6.mp4" type="video/mp4">
                      <source src="https://92c0a8860ed6f96fc90a-fecc07f2a991d0d68587de6370f58cc5.ssl.cf2.rackcdn.com/Westfield_v6.ogv" type="video/ogv">
                      Your browser does not support HTML5 video.
                    </video>
                </section>
                <section>
                    <div class="wrapper">
                    <p>
                        Every time you ring the bell, Westfield will donate $1 to Save the Children<sup>&reg;</sup> to support disaster response and recovery programming for children and families across the United States.
                    </p>
                    <div class="row clearfix">
                        <div class="col-3">
                            <a href="#" class="bells" data-mp3="https://92c0a8860ed6f96fc90a-fecc07f2a991d0d68587de6370f58cc5.ssl.cf2.rackcdn.com/058316593-christmas-bell-ring.mp3" data-ogg="https://92c0a8860ed6f96fc90a-fecc07f2a991d0d68587de6370f58cc5.ssl.cf2.rackcdn.com/058316593-christmas-bell-ring.ogg"><img 
                                class="off-page" 
                                src="images/bells.gif" 
                                alt="Animated Bells" 
                                style="position: absolute; left: -3000px;" /><img 
                                class="animated" 
                                src="images/bells.png" 
                                alt="Bells" /><br/>Click on the bells and we'll donate $1 on your behalf</a>
                        </div>
                        <div class="col-3">
                            <?php include __DIR__.'/counter.php' ?>
                        </div>
                        <div class="col-3">
                            <a href="http://www.westfieldinsurance.com/"><img src="images/logo-westfield-insurance.png" alt="Westfield Insurance" /></a>
                        </div>
                    </div>
                    </div>
                </section>
                <footer>
                    Westfield Insurance has guaranteed a minimum contribution to Save the Children for participation December 1, 2016 through December 31, 2016.  To learn more about Save the Children, visit <a href="http://www.savethechildren.org/legal">www.SavetheChildren.org/legal</a>
                </footer>
            </article>

        </div>
        <!-- #main -->
    </div>
    <!-- #main-container -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js?v=2"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                function() {
                    (b[l].q = b[l].q || []).push(arguments)
                });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = '//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X', 'auto');
        ga('send', 'pageview');
    </script>
</body>

</html>
