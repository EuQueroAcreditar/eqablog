<?php
$data['title']=$title;
$posts=htmlList($posts);
$data['content']='<h1>Posts</h1>';
if(is_null($posts)){
    $status='block';
}else{
$status='none';
$data['content'].=<<<heredoc
<div class="row-fluid">
<input class="span12" type="text" id="buscaDePost" onkeyup="filtrarPosts()" placeholder="Filtrar posts.." title="Type in a name">    
</div>
<ul id="posts">
$posts
</ul>
<script>
function filtrarPosts() {
    var input, filter, listaDePosts, status, post, link, i;
    input = document.getElementById("buscaDePost");
    filter = input.value.toUpperCase();
    listaDePosts = document.getElementById("posts");
    status = document.getElementById("status");
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

	posts = document.querySelectorAll('#posts > li');
	var postsArray = [].slice.call(posts);
	var displayNone = postsArray.filter(function(el) {
		return getComputedStyle(el).display === "none"
	});
	var displayShow = postsArray.filter(function(el) {
		return getComputedStyle(el).display !== "none"
	});
	var numberOfHiddenPosts = displayNone.length;
	var numberOfVisiblePosts = displayShow.length;

    if(numberOfVisiblePosts>0){
    	status.style.display = "none";
    }else{
        status.style.display = "block";
    }
}
</script>
heredoc;
}
$data['content'].="<div id='status' style='display:$status'>Nenhum post encontrado</div>";
view('template',$data);
?>
