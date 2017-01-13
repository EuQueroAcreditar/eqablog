<?php
$data['title']='Blog';
$postsRAW=ls(ROOT.'app/post');
$posts=null;
foreach ($postsRAW as $path) {
  $text=filename($path);
  $link='/post/'.slug($text);
  $posts[$text]=$link;
}

$data['posts']=$posts;
view('index',$data);
?>
