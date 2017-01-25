<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <?php
    $filename=ROOT.'/view/'.@$view;
    if(file_exists($filename)){
        require $filename;
    }
    ?>
    <title><?php print @$title;?></title>
    <link rel="stylesheet" href="/asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/asset/bootstrap/css/bootstrap-responsive.min.css">
    <link rel="icon" type="image/png" href="/asset/img/favicon.png" />
    <script src="/asset/bootstrap/js/jquery.min.js"></script>
    <script src="/asset/bootstrap/js/bootstrap.min.js"></script>
    <style media="screen">
    body{
        font-family: medium-content-sans-serif-font,"Lucida Grande","Lucida Sans Unicode","Lucida Sans",Geneva,Arial,sans-serif;
    }
    a:link{
        font-weight: bold;
    }
    #content{
        margin-top: 15px;
    }
    h1,h2,h3,h4{
        font-family: medium-content-sans-serif-font,"Lucida Grande","Lucida Sans Unicode","Lucida Sans",Geneva,Arial,sans-serif;
    }
    h1{
        color: rgba(0, 0, 0, 0.8);
        font-feature-settings: "liga";
        font-size: 40px;
        font-style: normal;
        font-weight: 700;
        letter-spacing: -1.11667px;
        line-height: 41.6px;
        margin-bottom: 0px;
        margin-left: -2.5px;
        margin-right: 0px;
        margin-top: 0px;
        overflow-wrap: break-word;
        text-rendering: optimizelegibility;
        visibility: visible;
    }
    p,li,td{
        font-family: medium-content-serif-font,Georgia,Cambria,"Times New Roman",Times,serif;
        font-feature-settings: "liga";
        font-size: 21px;
        font-style: normal;
        font-weight: 400;
        line-height: 33.1833px;
    }
    p {
        clearleftcolor: rgba(0, 0, 0, 0.8);
        font-feature-settings: "liga";
        letter-spacing: -0.0666667px;
        margin:14px 0;
        overflow-wrap: break-word;
        text-rendering: optimizelegibility;
        visibility: visible;
    }
    ul,ol{
        margin-top: 10px;
    }
    @media (min-width: 767px) {
        #main{
            margin-top:60px;
        }
        .thumbnail{
            margin-left: 20px;
        }
    }
    @media (max-width: 767px) {
        #main{
            margin-top:-10px;
        }
    }
    </style>
</head>
<body>
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="brand visible-phone">Eu Quero Acreditar</a>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="/page/Sobre">Sobre</a></li>
                    </ul>
                    <!--<ul class="nav pull-right">
                        <li><a href="/page/Back-end">Back-end</a></li>
                    </ul>-->
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <div class="container-fluid" id="main">
        <div class="row-fluid">
            <div class="span6 offset3">
                <p class="text-center">
                    <a href="/">
                        <img src="/asset/img/favicon.png" width="150" style="border:0;margin-bottom:-25px;" alt="Eu Quero Acreditar">
                    </a>
                </div>
            </div>
            <div class="row-fluid">
                <div class="row-fluid">
                    <div class="span6 offset3" id="content">
                        <?php print @$content;?>
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12 text-center">
                    <hr>
                    <p class="text-center">
                    <a href="https://facebook.com/eqasite">Facebook</a> »
                    <a href="https://github.com/euqueroacreditar">Github</a>
                    </p>
                </div>
            </div>
        </div>
    <?php
    if(!isDev()){
        ?>
        <!-- Piwik -->
        <script type="text/javascript">
        var _paq = _paq || [];
        _paq.push(["setDomains", ["*.euqueroacreditar.com"]]);
        _paq.push(['setRequestMethod', 'POST']);
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u="//piwik.mushape.com/";
            _paq.push(['setTrackerUrl', u+'piwik.php']);
            _paq.push(['setSiteId', 4]);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
        })();
        </script>
        <noscript><p><img src="//piwik.mushape.com/piwik.php?idsite=4" style="border:0;" alt="" /></p></noscript>
        <!-- End Piwik Code -->
        <?php
    }
    ?>
    </body>
    </html>
