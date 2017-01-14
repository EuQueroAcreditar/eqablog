Sat, 14 Jan 2017 09:38:01 -0200

Tags semânticas são complexas pois geralmente exigem que o programador as defina manualmente.

Caso você tenha criado acidentalmente uma tag no Github execute o seguinte código para apagá-la:

```
git tag -d versão && \
git push origin :refs/tags/versão
```

Substitua a palavra *versão* pelo número da versão de sua tag no Github.
