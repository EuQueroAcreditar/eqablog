<?php
$redirect=[
];

$klein->respond('GET', '/', function () {
    controller("index");
});

// $klein->respond('GET', '/test', function () {
//   controller("test");
// });

$klein->respond('GET', '/page/[:slug]', function($request, $response, $service){
    global $redirect;
    if(isset($redirect[uri()])){
        $response->redirect($redirect[uri()], $code = 302);
    }else{
        controller("page",['request'=>$request]);
    }
});

$klein->respond('GET', '/post/[:slug]', function($request, $response, $service){
    global $redirect;
    if(isset($redirect[uri()])){
        $response->redirect($redirect[uri()], $code = 302);
    }else{
        controller("post",['request'=>$request]);
    }
});
?>
