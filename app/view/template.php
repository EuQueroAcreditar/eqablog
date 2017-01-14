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
    <!-- bower:css -->
    <link rel="stylesheet" href="../../bower_components/1k/dist/1k.min.css" />
    <!-- endbower -->
    <!-- bower:js -->
    <!-- endbower -->
    <link rel="icon" type="image/png" href="/asset/img/favicon.png" />
</head>
<body>
    <div class="c">
        <div class="r">
            <div class="g12">
                <p class="center">
                    <a href="/" title="Hacker Gaucho"><img src="/asset/img/favicon.png" width="150" style="border:0;" alt="Hacker Gaucho"></a>
                    <br>
                    <a href="/page/Sobre">Sobre</a> <!--»
                    <a href="/">Contato</a>-->
                </p>
                <hr>
            </div>
            <div class="g3">
                <h1>Menu</h1>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/page/Back-end">Back-end</a></li>
                </ul>
            </div>
            <div class="g9">
                <?php print @$content;?>
            </div>
        </div>
        <div class="row">
            <div class="g12 text-center">
                <hr>
                <p class="center">
                    <a href="https://fb.com/HackerGaucho">Facebook</a> »
                    <a href="https://github.com/aicoutos">Github</a>
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
        _paq.push(["setDomains", ["*.hackergaucho.com"]]);
        _paq.push(['setRequestMethod', 'POST']);
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u="//piwik.mushape.com/";
            _paq.push(['setTrackerUrl', u+'piwik.php']);
            _paq.push(['setSiteId', 1]);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
        })();
        </script>
        <noscript><p><img src="//piwik.mushape.com/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
        <!-- End Piwik Code -->
        <?php
    }
    ?>
</body>
</html>
