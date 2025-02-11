# glpi-uspoauth
Gambiarra para fazer o GLPI autenticar no USP oAuth. Um dia vira plugin

**Testado na versão 10.0.17 do GLPI**

&nbsp;

## Setup Inicial

Para usar a autenticação do USP oAuth com o GLPI faça o seguinte:

- Cadastrar uma entrada no USP oAuth
  - A url de retorno deverá direcionar para o arquivo **glpi-uspoauth/uspoauth.php**

- Entrar na pasta do GLPI e clonar o projeto

```
git clone git@github.com:stifdrp/glpi-uspoauth.git
```

- Faça a instalação da biblioteca de senha única via composer. Para mais detalhes acesse: *[uspdev/senhaunica](https://github.com/uspdev/senhaunica)*.

```
composer require uspdev/senhaunica:2.0
```
 
- Inserir no index.php do GLPI, o código abaixo após o load do template de login **_TemplateRenderer_**
```php 
require_once ('glpi-uspoauth/botao-login.php');
```

- Criar uma cópia do config_example.php para config.php e setar as variáveis do seu ambiente
```php
$url_app = 'A URL DA SUA APLICACAO';
$consumer_key = 'SEU CONSUMER KEY';
$consumer_secret = 'SEU CONSUMER SECRET';
$callback_id = 'SEU CALLBACK ID';

//configuracoes do sistema
$unidade = "SIGLA DA SUA UNIDADE NO RETORNO DO OAUTH";
$passwd_salt = "SEU SALT"; //usado para criar as senhas do usuário no banco do GLPI
```

&nbsp;

## Possíveis erros

- Se aparecer o seguinte erro:
> ```php
> OAuthException: Unexpected result from the server "https://uspdigital.usp.br/wsusuario/oauth/request_token" () while requesting a request tokenobject(OAuthException2)
> ```
> 
> Use a variável `$regex_http_1dot1` na expressão if da linha 477 do arquivo `library/OAuthRequester.php`
