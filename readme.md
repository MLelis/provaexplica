## Objetivo
Prova realizada com o objetivo de passar na entrevista de trabalho da empresa Explicae.

#### Dependências Necessárias
* PHP 7.4.10 ou +
* Apache Server 2.4.46 ou +
* Xampp para Windows 7.4.10

#### Instalação do sistema
Para conseguir rodar o sistema localmente, é preciso seguir os seguintes passos:
> OBS: Para rodar o sistema, utilizei o Xampp para Windows 7.4.10.

* Clone o repositório dentro da pasta  `C:\xampp\htdocs`.

* Depois abra o projeto no Visual Studio Code.

* Em seguida, abra o arquivo includes/config.php e altere os parametros Ex: em $_SERVER["DOCUMENT_ROOT"] informe o caminho da pasta do projeto.
```
$_SERVER["DOCUMENT_ROOT"] = "C:/xampp/htdocs/provaexplica/";
```

* Em seguida, $urlSite informe a url do sistema.
```
$urlSite = "http://192.168.15.11/provaexplica";
```
* Em seguida, $urlInicioConfig, é a partir de onde fica a index principal do sistema.
```
$urlInicioConfig = 1;
```
* Em seguida, em $assets é o caminho da pasta assets.
```
$assets = "http://192.168.15.11/provaexplica/assets/";
```

* OBS: a seguindo todos os passos acima, basta acessar o sistema pela url: `http://192.168.15.11/provaexplica/`