Test Mocks com Prophecy
=======================

# Testes #

* Testes são programas para testar programas
* Devem ser rápidos (cof, cof)
* Devem ser independentes (COF! COF!)
* Tipos:
    * Unitários *
    * Funcionais
    * Ponta-a-ponta

# Testes unitários #

* Focados apenas no contexto do método
* Outras dependências não são importantes

## Para isso, temos os dublês: ##

* Dummy - Não fazem nada, só existem
* Stubs - Tem comportamento simulado, mas nada que espere o seu retorno
* Mocks - Tem comportamento simulado e o seu retorno poderá ser usado durante a execução do contexto

# PHPUnit #

* Uma das (ou a mais) usadas ferramentas de teste unitário no PHP
* Baseado nos padrões JUnit
* Tem uma ferramenta interna de mock
* Versão 4.5+: **Prophecy**

# Prophecy #

* Baseado no PHPSpec2
* Fácil de ler
* Fácil de implementar
* Está incorporado no PHPUnit 4.5+
* Menos código escrito
* NÂO FAZ PARTIAL MOCK

## Exemplos: ##

* [Teste com PHPUnit 3.x e 4.5+ Mock](tests/unit/HtmlConverterMockTest.php)
* [Teste com Prophecy](tests/unit/HtmlConverterProphecyTest.php)

# Referências #

* [Integração com o PHPUnit 3.x (DEPRECIADO há mais de 1 ano)](https://github.com/phpspec/prophecy-phpunit)
* [Github do PHPSpec](https://github.com/phpspec/phpspec)
* [Github do Prophecy](https://github.com/phpspec/prophecy)
* [Github do PHPUnit](https://github.com/sebastianbergmann/phpunit)
