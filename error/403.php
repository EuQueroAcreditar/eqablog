<?php
$data['title']='Erro';
$data['content']=<<<heredoc
<h1>{$data['title']}</h1>
<p>Acesso negado</p>
heredoc;
return view('template',$data);
?>
