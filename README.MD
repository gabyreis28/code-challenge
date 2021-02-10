<p align="center">
  <img width="50%" height="100%" src=".github/tintalogo.png" alt="tinta" title="tinta"></a>
</p>

<h3 align="center">Calculadora de Tinta</h3>

<p align="center">
  Uma aplicação web que ajude o usuário a calcular a quantidade de tinta necessária para pintar uma sala.
  Essa aplicação deve considerar que a sala é composta de 4 paredes e deve permitir que o usuário escolha qual a medida de cada parede e quantas janelas e portas possuem cada parede.
  Com base na quantidade necessária o sistema deve apontar tamanhos de lata de tinta o usuário deve comprar.
</p>

## Dependências

Dependências obrigatórias:


- [>= php7.3](https://www.php.net/downloads.php)
- [docker-compose](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-compose-on-ubuntu-20-04-pt)
- [composer](https://getcomposer.org/)

Obs: Projeto executado no sistema operacional linux ubuntu.

## Iniciar aplicação

```bash
# clone
$ git clone git@github.com:gabyreis28/code-challenge.git

# abrir pasta
$ cd code-challenge

# instalar dependências
$ composer install

# iniciar aplicação
$ composer up
```
## Teste unitário

```bash
# comando
$ composer test
```

```javascript
gabriela in ~/tinta-code-challenge ❯ composer test
> ./vendor/bin/phpunit
PHPUnit 9.5.2 by Sebastian Bergmann and contributors.

Runtime:       PHP 7.4.15
Configuration: /home/gabriela/tinta-code-challenge/phpunit.xml

.                                                                   1 / 1 (100%)

Time: 00:00.004, Memory: 6.00 MB

OK (1 test, 4 assertions)
```

## Lint

```bash
# comando
$ composer lint
```
```javascript
gabriela in ~/tinta-code-challenge took 6s ❯ composer lint
> ./vendor/bin/phplint
phplint 2.0.2 by overtrue and contributors.

Loaded config from "/home/gabriela/tinta-code-challenge/.phplint.yml"

...........

Time: 1 sec     Memory: 0 B     Cache: No

OK! (Files: 11, Success: 11)
```

## Contato

- [LinkedIn](https://www.linkedin.com/in/gabrieladiasreis/)
- [gabriela.dias.97@hotmail.com](mailto:gabriela.dias.97@hotmail.com)