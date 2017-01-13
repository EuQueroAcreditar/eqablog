<?php
$data['title']='Erro';
$data['content']=<<<heredoc
<h1>{$data['title']}</h1>
<p>Página não encontrada</p>
heredoc;
return view('template',$data);
?>
