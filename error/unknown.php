<?php
$data['title']='Erro';
$data['content']=<<<heredoc
<h1>{$data['title']}</h1>
<p>Ocorreu um erro desconhecido</p>
heredoc;
return view('template',$data);
?>
