<?php
$klein->respond('GET', '/', function () {
  controller("index");
});

// $klein->respond('GET', '/test', function () {
//   controller("test");
// });

$klein->respond('GET', '/page/[:slug]', function($request){
  controller("page",['request'=>$request]);
});

$klein->respond('GET', '/post/[:slug]', function($request){
  controller("post",['request'=>$request]);
});
?>
