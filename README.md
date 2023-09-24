CRUD com PHP e MySQL no VSCode
<!--# CRUD com PHP e MySQL no VSCode, usando o Git Hub como versionador de código.-->
## 1 - INTRODUÇÃO 
Olá! 😎

CRUD é um acrônimo recursivo utilizado para indicar as operações básicas realizadas sobre um banco de dados (Create, Read, Update, Delete). **CRUD** é um exemplo de aplicação com foco apenas nas operações básicas do CRUD. Aspectos como segurança, autenticação, validação de dados, geração de HTML dinâmico, etc, foram considerados subjacentes. Foram utilizadas na aplicação, as seguintes tecnologias para desenvolvimento WEB: PHP 8.1, MySql Server, Bootstrap 5.3.0, Apache 2.4 (old but gold), rodando em Ubuntu 22.04.2 LTS (GNU/Linux 5.15.90.1-microsoft-standard-WSL2 x86_64). O editor de codigo utilizado foi o VSCode (pode ser o notepad++, o sublime text, o gedit, etc), o versionador de código escolhido foi o Git Hub. O projeto tem foco nas operações básicas do CRUD de modo que a ausência de uma IDE ou de um versionador de código não interferem no entendimento de como a aplicação foi desenvolvida.

- **C:** Create – Cria um registro
- **R:** Read – Lê um registro, ou uma lista de registros.
- **U:** Update – Atualiza um registro.
- **D:** Delete – Exclui um registro.

## 2 - DESENVOLVIMENTO
### 2.1 - TECNOLOGIAS UTILIZADAS

- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/windows8/windows8-original.svg" /> Windows ✔️
- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg" /> VSCode ✔️
- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" /> Git Hub ✔️
- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" /> PHP ✔️
- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" /> HTML5 ✔️
- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" /> CSS3 ✔️
- <img align="center" heigth="1cd /opt/lampp/htd5" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" /> MySQL ✔️
- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" /> Bootstrap ✔️
- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jquery/jquery-original.svg" /> JQuery ✔️
- <img align="center" heigth="15" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/markdown/markdown-original.svg" /> Markdown ✔️
  
### 2.2 - TUTORIAL

#### **XAMPP (Apache + MariaDB + PHP + Perl)**

Instalação do XAMPP (*dev* iniciante deve saber que se desenvolvia assim num passado curto).</br> 
Utilizei dicas valiosas do Code Easy https://www.youtube.com/watch?v=Y_GS5OPnd7I e do Edivaldo Brito: https://www.edivaldobrito.com.br/como-instalar-o-xampp-no-linux/

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

    luciolemos@dev:~$ git config --list
    safe.directory=/opt/lampp/htdocs/crud/crud_4
    user.name=lucioweb
    user.email=lucio.lemos.385@ufrn.edu.br

Clonando o projeto para a pasta de sua preferência dentro de htdocs.

    sudo git clone https://github.com/lucioweb/crud_4.git

</details>

<details>
<summary>MySQL :eye: </summary> 
O arquivo de conexão `db_conn.php` faz referência a um banco de dados denominado `crud`, lembre-se de criá-lo.

    CREATE DATABASE e_comerce;

Script de criação da tabela `usuários` (é como ela é referenciada no arquivo `data_table.php`).

    CREATE TABLE
    IF NOT EXISTS tbl_user (
    id INT NOT NULL AUTO_INCREMENT,
    first_name varchar(50) NOT NULL,
    last_name varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    gender varchar(20) NOT NULL,
    ts timestamp,
    PRIMARY KEY (id)
    ) 
    ENGINE = InnoDB AUTO_INCREMENT = 1 DEFAULT CHARSET = utf8mb4;

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
