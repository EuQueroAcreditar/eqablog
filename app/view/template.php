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
                    <i>Anderson Ismael</i>
                    <br>
                    <a href="/">Blog</a> »
                    <a href="/page/Sobre">Sobre</a>
                </p>
                <hr>
            </div>
            <div class="g12">
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
</body>
</html>
