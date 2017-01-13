Fri, 13 Jan 2017 16:09:34 -0200

Criei esse blog como uma alternativa mais simples aos sistemas engessados disponíveis atualmente.

Blogs estáticos normalmente compilam o markdown para gerar o html, este blog não faz isso.

Este blog foi criado em apenas dois dias com o foco na simplicidade. Para criar posts por exemplo uso a seguinte função em shell script:

```
function posthg(){
    cd ~/www/git/hgblog/app
    date -R >> "post/$1.md"
    printf "\n" >> "post/$1.md"
    nano +3 "post/$1.md"
}
```

Para criar páginas ao invés de posts simplesmente utilizo outra função apenas com o nome e a pasta diferente.

Ele usa arquivos markdown no back-end e o [1k](https://github.com/HackerGaucho/1k) no front-end. Seu código fonte disponível no [Github](https://github.com/HackerGaucho/hgblog). 
