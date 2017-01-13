<?php
$data['title']=$title;
$posts=htmlList($posts);
if(is_null($posts)){
    $data['content']=<<<heredoc
    <h1>Erro</h1>
Nenhum post encontrado
heredoc;
}else{
$data['content']=<<<heredoc
<input type="text" id="buscaDePost" onkeyup="filtroDePosts()" placeholder="Buscar post.." title="Type in a name">
<ul id="posts">
$posts
</ul>
<script>
function filtroDePosts() {
    var input, filter, table, tr, td, i;
    input = document.getElementById("buscaDePost");
    filter = input.value.toUpperCase();
    listaDePosts = document.getElementById("posts");
    post = listaDePosts.getElementsByTagName("li");
    for (i = 0; i < post.length; i++) {
        link = post[i].getElementsByTagName("a")[0];
        if (link) {
            if (link.innerHTML.toUpperCase().indexOf(filter) > -1) {
                post[i].style.display = "";
            } else {
                post[i].style.display = "none";
            }
        }
    }
}
</script>
heredoc;
}
view('template',$data);
?>
