<?php
$data['title']=$title;
$data['content']=<<<heredoc
<h1>$title</h1>
<small>$date</small>
$post
heredoc;
view('template',$data);
?>
