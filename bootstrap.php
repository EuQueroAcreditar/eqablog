<?php
/*Constantes*/
define('ROOT',__DIR__.'/');

/*Funções*/
function controller($name,$data=[]){
    extract($data);
    require ROOT.'app/controller/'.$name.'.php';
}

function filename($path){
    return JBZoo\Utils\FS::filename($path);
}

function htmlList($array,$assoc=true){
    if(is_array($array) && count($array)>0){
        $list=null;
        if($assoc){
            foreach ($array as $text => $link) {
                $list.="<li><a href='$link'>$text</a></li>\n";
            }
        }else{
            foreach ($array as $text) {
                $list.="<li>$text</li>\n";
            }
        }
        return $list;
    }else{
        return null;
    }
}

function isDev(){
        $end=@end(explode('.',$_SERVER['SERVER_NAME']));
        if($end==='dev' || $end==='git'){
                return true;
        }else{
                error_reporting(0);
                return false;
        }
}

function ls($dir){
    $ignored = array( '.svn','.swp', '.htaccess');
    $files = array();
    foreach (scandir($dir) as $file) {
        if (strposarray($file, $ignored)){
            continue;
        }else{
            $files[$file] = filemtime($dir . '/' . $file);
        }

    }
    $files = array_keys($files);
    if(is_array($files)){
        $files=array_diff( $files, ['.','..'] );
    }else{
        $files=false;
    }
    natcasesort($files);
    return $files;
}

function md($text){
    $Parsedown = new Parsedown();
    return $Parsedown->text($text);
}

function notfound(){
    header('HTTP/1.0 404 Not Found');
    require ROOT.'error/404.php';
    exit();
}

function slug($text,$slug=true){
    $text=trim($text);
    if($slug){
        return str_replace(' ', '_', $text);
    }else{
        return str_replace('_', ' ', $text);
    }
}

function strposarray($haystack, $needles=array(), $offset=0) {
    $chr = array();
    foreach($needles as $needle) {
        $res = strpos($haystack, $needle, $offset);
        if ($res !== false) $chr[$needle] = $res;
    }
    if(empty($chr)) return false;
    return min($chr);
}

function view($view,$data=[]){
    extract($data);
    require ROOT.'app/view/'.$view.'.php';
}

/*Globais*/
$klein = new \Klein\Klein();

/*Rotas*/
require 'app/rotas.php';

$klein->onHttpError(function ($code, $router) {
    if($code==403){
        $router->response()->body(require 'error/403.php');
    }elseif($code==404){
        $router->response()->body(require 'error/404.php');
    }else{
        $router->response()->body(require 'error/unknown.php');
    }
});

$klein->dispatch();
?>
