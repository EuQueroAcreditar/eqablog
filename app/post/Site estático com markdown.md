Fri, 13 Jan 2017 16:09:34 -0200

Esse blog foi desenvolvido com o foco na simplicidade. Ele gera html on the fly, não possui CLI e a GUI é extremamente leve.

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

O código fonte deste blog está disponível no [Github](https://github.com/HackerGaucho/hgblog). 
