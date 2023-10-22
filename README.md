<h3 align="center">Enum Basics Extension for Laravel</h3>

## 🧐 Sobre <a name = "about"></a>

Este pacote inclui uma classe de extensão desacoplada que contem funções basicas para facilitar o enum.
Sempre que possivel ele sera atualizado, e esta aberto para a comunidade sugerir melhorias.

## 🏁 Para utilizar o pack

Para utilizar a classe, basta instalar ela utilizando o comando do composer:

```
composer require gustavosantarosa/laravel-tool-pack
```

e extender ela na sua classe de enum.

Pronto, ja é para estar funcionando.

## 🎈 Recursos

Nele existem algumas ferramentas uteis.

- BaseEnum:
  - Filtra constantes por uma parte do nome.
  - Checa se um valor é valido.
  - Checa se um nome é valido.
  - Coleta as constantes.

## 🧐 Outras Bibliotecas

- [SetSchema-Trait](https://packagist.org/packages/gustavosantarosa/setschema-trait-postgresql) - Suprir a necessidade de setar os schemas automaticamente do PostgreSQL;
- [Validate-Trait](https://packagist.org/packages/gustavosantarosa/validate-trait) - Bindar os Requests automaticamente de acordo com o caminho do Service Pattern;
- [PerPage-Trait](https://packagist.org/packages/gustavosantarosa/perpage-trait) - Padronizar a quantidade do paginate na api inteira e definir uma quantidade máxima;
- [Handler-Basics-Extension](https://packagist.org/packages/gustavosantarosa/handler-basics-extension) - Contem tratamento das principais exceções do laravel, e contem varios responses para lhe auxiliar;

## ⛏️ Ferramentas

- [php](https://www.php.net/) - linguagem

## ✍️ Autor

- [@Luis Gustavo Santarosa Pinto](https://github.com/GustavoSantarosa) - Idea & Initial work
