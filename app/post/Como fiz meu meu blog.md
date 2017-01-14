Fri, 13 Jan 2017 16:09:34 -0200

Primeiramente pensei na simplicidade, este blog na versão [1.0.0](https://github.com/HackerGaucho/hgblog/releases/tag/1.0.0) não possui CLI e a GUI é extremamente leve.

Tenho dúvidas se devo chamá-lo de blog estático ou dinâmico pois ele gera html on the fly ao invés de compilá-lo previamente.

Para criar posts utilizo a seguinte função em shell script:

```
function posthg(){
    cd ~/www/git/hgblog/app
    date -R >> "post/$1.md"
    printf "\n" >> "post/$1.md"
    nano +3 "post/$1.md"
}
```

Para maior simplicidade e leveza uso [1k](https://github.com/HackerGaucho/1k), uma pequeno framework responsivo em CSS3 puro que desenvolvi ad-hoc.

Futuramente gostaria de adicionar uma área administrativa protegida e suporte a bancos de dados, além de disponibilizá-lo através do Composer.

O código fonte deste blog está disponível no [Github](https://github.com/HackerGaucho/hgblog).
