CRUD com PHP e MySQL
<!--# CRUD com PHP e MySQL no PhpStorm, usando o Git Hub como versionador de código.-->
## 1 - INTRODUÇÃO 
Olá! 😎

C**CRUD** 
é um exemplo de aplicação com foco apenas nas operações básicas (Create, Read, Update, Delete) realizadas sobre uma base de dados. <br>
Foram utilizadas na aplicação, as seguintes tecnologias para desenvolvimento web: PHP 8.1.2, MySql Server, Apache 2.4 (*old but gold*) e Bootstrap 5.3.0. A aplicação roda em VPS LINUX (Ubuntu 22.04.4 LTS).<br> 
A IDE utilizada foi o PhpStorm (pode ser o VSCode, Notepad++, Sublime Text, Gedit, etc).<br>
O versionador de código escolhido foi o Git Hub. <br>
- **C:** Create – Cria um registro
- **R:** Read – Lê um registro, ou uma lista de registros.
- **U:** Update – Atualiza um registro.
- **D:** Delete – Exclui um registro.

## 2 - DESENVOLVIMENTO
### 2.1 - TECNOLOGIAS UTILIZADAS

- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/ubuntu/ubuntu-plain.svg" /> Ubuntu ✔️
- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg" /> VSCode ✔️
- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" /> Git Hub ✔️    
- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" /> PHP ✔️
- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" /> HTML5 ✔️
- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" /> CSS3 ✔️
- <img align="center" heigth="1cd /opt/lampp/htd5" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" /> MySQL ✔️
- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" /> Bootstrap ✔️
- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" /> javasript ✔️
- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jquery/jquery-original.svg" /> JQuery ✔️
- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/markdown/markdown-original.svg" /> Markdown ✔️
  <!--<img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/windows8/windows8-original.svg" />-->
### 2.2 - TUTORIAL

#### **XAMPP (Apache + MariaDB + PHP + Perl)**

##### Instalação do [XAMPP](https://www.apachefriends.org/pt_br/index.html)
*Dev* iniciante deve saber que servidor web rodando em *localhost* era instalando dessa maneira na década passada. 

Brincadeiras à parte, fato é que essas *stacks* (WAMP, LAMP, XAMPP) são ainda muito utilizadas nos dias atuais. 

Se você leitor é desenvolvedor web e desenvolve particularmente com PHP e MySQL, deve em algum momento do seu aprendizado ter lançado mão de pelo menos uma dessas ferramentas (refiro-me aqui às soluções empacotadas), porque é possível e até recomendado que você faça a instalação do seu servidor web, instalando e configurando Apache, Mysql/MySQL Server/MariaDB e PHP separadamente, por questões de realmente saber o que está se passando no submundo da sua máquina. 

Essa é apenas uma das mil e uma maneiras de se ter instalado um servidor web local. Atualmente temos soluções modernas, elegantes e simples para servidores web.</br> 

Para o projeto CRUD, utilizei um PC antigo e com escassos recursos computacionais. Por imposição de uma série de requisitos, a solução mais viável foi recorrer a uma pilha empacotada como o XAMPP. Para a instalação do pacote em ambiente UNIX, utilizei dicas valiosas de:
* [Code Easy](https://www.youtube.com/watch?v=Y_GS5OPnd7I)
* [Edivaldo Brito](https://www.edivaldobrito.com.br/como-instalar-o-xampp-no-linux)

<details>
<summary>Startando o XAMPP :eye: </summary> 

    sudo /opt/lampp/lampp start

Lembre-se de que deve ter atribuído permissão 777 ao diretório htdocs.

    sudo chmod 777 htdocs -R

Dentro de `/opt/lampp$` (no caso do Ubuntu) execute o comando abaixo para carregar XAMPP em modo GUI.

    sudo ./manager-linux-x64.run
</details>

<details>
<summary>GitHub :eye: </summary> 

Instalando Git no Ubuntu

    sudo apt update
    sudo apt install git

Verificando a versão do Git

    git --version

Configurando o Git

    git config --global user.name "lucioweb"
    git config --global user.email "lucio.lemos.385@ufrn.edu.br"

Listando as configurações `git config --list`:

    user.name=lucioweb
    user.email=lucio.lemos.385@ufrn.edu.br

Clonando o projeto `crud` para a pasta `$ /var/www`, raiz do servidor.

    luciolemos@dev:/var/www $ sudo git clone https://github.com/lucioweb/crud.git
É possível criar a pasta de destino do clone, acrescentando ao comando acima o nome da pasta `crud_php`, por exemplo. Lembre-se de que `/var/www` é diretório do sistema.

    luciolemos@dev:/var/www $ sudo git clone https://github.com/lucioweb/crud.git crud_php
</details>

<details>
<summary>MySQL :eye: </summary> 
O arquivo de conexão `db_conn.php` faz referência a um banco de dados denominado `crud`, lembre-se de criá-lo.

    CREATE DATABASE crud;

Script de criação da tabela `tbl_user` (é como ela é referenciada no arquivo `data_table.php`).

    CREATE TABLE
    `tbl_user` (
        `id` int NOT NULL AUTO_INCREMENT,
        `first_name` varchar(50) NOT NULL,
        `last_name` varchar(50) NOT NULL,
        `email` varchar(50) NOT NULL,
        `estado_civil` varchar(20) NOT NULL,
        `cidade` varchar(50) NOT NULL,
        `uf` varchar(50) NOT NULL,
        `cep` varchar(50) NOT NULL,
        `gender` varchar(20) NOT NULL,
        `ts` timestamp NULL DEFAULT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB AUTO_INCREMENT = 1 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci

Script PHP de conexão da aplicação com o banco de dados. 

    <?php
    $servername = "localhost";
    $username = "luciolemos";
    $password = "Dif**************************#";
    $dbname = "crud";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Conexão falhou " . mysqli_connect_error());
}

</details>

<details>
<summary>Estrutura do projeto CRUD :eye: </summary> 


Estrutura gerada com o comando `luciolemos@dev:/var/www/crud_php$ tree`.

    ├── README.md
    ├── cadastrar.php
    ├── css
    │   ├── footer.css
    │   └── navbar.css
    ├── data_table.php
    ├── db_conn.php
    ├── editar.php
    ├── excluir.php
    ├── includes
    │   ├── create.php
    │   ├── delete.php
    │   └── table.php
    ├── index.php
    ├── js
    │   └── mask.js
    ├── pages
    │   ├── about.php
    │   ├── blog.php
    │   ├── contact.php
    │   └── gallery.php
    ├── script.php
    ├── scripy.sql
    ├── shareds
    │   ├── footer.php
    │   └── navbar.php
    ├── snipets.php
    ├── video.php
    └── videoxampp.php
</details>

<div style="display:inline_block">
  <!--<img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" /> -->
  <!-- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" /> -->
  <!-- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-plain.svg" /> -->
  <!-- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" /> -->
  <!-- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/ubuntu/ubuntu-plain.svg" /> -->
  <!-- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/angularjs/angularjs-original.svg" /> -->
  <!-- <img align="center" heigth="30" width="40" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" /> -->
  <!-- <img align="center" heigth="30" width="40"  src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/gimp/gimp-original.svg" /> -->
  <!-- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" /> -->
  <!-- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/ssh/ssh-original.svg" /> -->
  <!-- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg" /> -->
  <!-- <img align="center" heigth="30" width="40" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jetbrains/jetbrains-original.svg" /> -->
</div>
<br>
<!-- ![Anurag's GitHub stats](https://github-readme-stats.vercel.app/api?username=lucioweb&show_icons=true) -->
<div style="display:inline_block">
<img src="https://img.shields.io/badge/Windows-0078D6?style=for-the-badge&logo=windows&logoColor=white" />
<img src="https://img.shields.io/badge/VSCode-E34F26?style=for-the-badge&logo=vscode&logoColor=white" />
<img src="https://img.shields.io/badge/WAMPP-E34F26?style=for-the-badge&logo=wampp&logoColor=white" />
<img src="https://img.shields.io/badge/Markdown-E34F26?style=for-the-badge&logo=markdown&logoColor=white" />
<img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" />
<img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" />	
<img src="https://img.shields.io/badge/MySQL-E34F26?style=for-the-badge&logo=mysql&logoColor=white" />
<img src="https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white" />
<img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" />
<img src="https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white" />
<!-- <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" /> -->
		
</div>


<!--
[![Top Langs](https://github-readme-stats.vercel.app/api/top-langs/?username=lucioweb&layout=compact)](https://github.com/lucioweb/github-readme-stats)
-->

<!-- 
https://devicon.dev/
https://dev.to/envoy_/150-badges-for-github-pnk
https://shields.io/
-->
