<div>
<img src="https://img.shields.io/badge/Ubuntu-A34F26?style=for-the-badge&logo=ubuntu&logoColor=white" alt=""/>
<img src="https://img.shields.io/badge/Debian-B34F26?style=for-the-badge&logo=debian&logoColor=white" alt=""/>
<img src="https://img.shields.io/badge/PHP-C34F26?style=for-the-badge&logo=php&logoColor=white" alt=""/>
<img src="https://img.shields.io/badge/Markdown-E34F26?style=for-the-badge&logo=markdown&logoColor=white" alt=""/>
<img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt=""/>
<img src="https://img.shields.io/badge/CSS3-E34F26?style=for-the-badge&logo=css3&logoColor=white" alt=""/>	
<img src="https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white" alt=""/>
<img src="https://img.shields.io/badge/MariaDB-003545?style=for-the-badge&logo=mariadb&logoColor=white" alt=""/>
<img src="http://img.shields.io/badge/-PHPStorm-181717?style=for-the-badge&logo=phpstorm&logoColor=white" alt=""/>	
</div>

<details>
<summary>CONFIGURAÇÕES DO SERVIDOR 👋 :eye: </summary> 

- HOST: 88.198.104.148
- USER: ************
- PORTA: 22
- PASSWORD: ********************
- TOKEN GITHUB: 
- USUÁRIO GIT `$ git config user.name`: lucioweb
- ACESSO SSH: `$ ssh -22 ************@88.198.104.148`
</details>

<details>
<summary>PHP :eye: </summary> 

#### - Versão do PHP instalada ⭐⭐⭐⭐⭐⭐
     php -v //Versão do PHP instalada
#### - Módulos do PHP instalados     
     php -m //Lista os módulos instalados
O comando acima retorna:
     
     [PHP Modules]
     calendar
     Core
     ctype
     curl
     date
     ...
     ...
     tokenizer
     
##### - LOCALIZA ARQUIVOS php.ini
    find / -name php.ini //Localiza arquivos php.ini

O Comando acima retorna:

    /etc/php/8.1/cli/php.ini
    /etc/php/8.1/apache2/php.ini
    
    Last login: Sun Jun  9 14:33:19 2024 from 177.89.246.188
    luciolemos@cloud18344:~$ php -v
    PHP 8.1.2-1ubuntu2.17 (cli) (built: May  1 2024 10:10:07) (NTS)
    Copyright (c) The PHP Group
    Zend Engine v4.1.2, Copyright (c) Zend Technologies
        with Zend OPcache v8.1.2-1ubuntu2.17, Copyright (c), by Zend Technologies
        with Xdebug v3.1.2, Copyright (c) 2002-2021, by Derick Rethans
#### - Instala PHP 8.3 + outras configurações        
    luciolemos@cloud18344:~$ sudo add-apt-repository ppa:ondrej/php
    [sudo] password for luciolemos: 
    
    luciolemos@cloud18344:~$ sudo apt update
    
    luciolemos@cloud18344:~$ sudo apt install php8.3
    
    luciolemos@cloud18344:~$ php -v
    PHP 8.1.2-1ubuntu2.17 (cli) (built: May  1 2024 10:10:07) (NTS)
    Copyright (c) The PHP Group
    Zend Engine v4.1.2, Copyright (c) Zend Technologies
        with Zend OPcache v8.1.2-1ubuntu2.17, Copyright (c), by Zend Technologies
        with Xdebug v3.1.2, Copyright (c) 2002-2021, by Derick Rethans
    
    luciolemos@cloud18344:~$ sudo update-alternatives --list  php
    /usr/bin/php.default
    /usr/bin/php8.1
    /usr/bin/php8.3
    
    luciolemos@cloud18344:~$ sudo update-alternatives --set php /usr/bin/php8.3
    update-alternatives: using /usr/bin/php8.3 to provide /usr/bin/php (php) in manual mode
    
    luciolemos@cloud18344:~$ php -v
    PHP 8.3.8 (cli) (built: Jun  8 2024 21:34:22) (NTS)
    Copyright (c) The PHP Group
    Zend Engine v4.3.8, Copyright (c) Zend Technologies
        with Zend OPcache v8.3.8, Copyright (c), by Zend Technologies
    
    luciolemos@cloud18344:~$ systemctl restart apache2.service
    ==== AUTHENTICATING FOR org.freedesktop.systemd1.manage-units ===
    Authentication is required to restart 'apache2.service'.
    Authenticating as: Lúcio Flávio Lemos,,, (luciolemos)
    Password: 
    ==== AUTHENTICATION COMPLETE ===
    luciolemos@cloud18344:~$  
#### - INSTALAÇÃO DE PHP 8.2
    $ sudo add-apt-repository ppa:ondrej/php
    $ sudo apt update
    $ sudo apt install php8.2
    $ sudo update-alternatives --set php /usr/bin/php8.2 //Alterna para a versão do PHP 8.2
    $ sudo update-alternatives --set php /usr/bin/php7.4 //Volta para a versão do PHP 7.4
    $ php -v //Verifica a versão
    $ php -m //Lista os módulos instalados
    
    sudo update-alternatives --list  php //Lista as versões do PHP instaladas
    /usr/bin/php7.2
    /usr/bin/php7.4
    /usr/bin/php8.0
    /usr/bin/php8.1    
</details>

<details>
<summary>MYSQL :eye: </summary> 

#### - VERSÃO INSTALADA DO MYSQL     
     mysql -V
O comando acima retorna:
     
     mysql  Ver 8.0.36-0ubuntu0.22.04.1 for Linux on x86_64 ((Ubuntu))
#### - VERSÃO INSTALADA DO MARIA DB
    mariadb -V
O comando acima retorna:

    mariadb  Ver 15.1 Distrib 10.11.6-MariaDB, for debian-linux-gnu (x86_64) using  EditLine wrapper
#### - INSTALANDO O MYSQL-SERVER
    sudo apt install mysql-server    
#### - EXECUTANDO O SCRIPT DE SEGURANÇA            
    sudo mysql_secure_installation
#### - STATUS, START, RELOAD, STOP DO SERVIÇO DO MySQL
    service mysql status
    service mysql start
    service mysql stop
    service mysql reload
   
O servidor MySQL é iniciado automaticamente após a instalação. Você pode verificar o status do servidor MySQL com o seguinte comando `systemctl status mysql`.
Se o sistema operacional estiver habilitado para systemd, comandos systemctl padrão (ou alternativamente, service com os argumentos invertidos) como stop , start , status e restart devem ser usados ​​para gerenciar o serviço do servidor MySQL. 
    
    systemctl status mysql //Funcionou
#### - ACESSANDO O SERVIDOR DE BANCO DE DADOS MYSQL COMO USUÁRIO ROOT
    root@cloud18344:~# mysql
Ou:

    root@cloud18344:~# mysql -u root -p
O comando acima retorna:

    Enter password: 
    Welcome to the MySQL monitor.  Commands end with ; or \g.
    Your MySQL connection id is 297
    Server version: 8.0.36-0ubuntu0.22.04.1 (Ubuntu)
        
    Copyright (c) 2000, 2024, Oracle and/or its affiliates.
        
    Oracle is a registered trademark of Oracle Corporation and/or its
    affiliates. Other names may be trademarks of their respective
    owners.
        
    Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.
        
    mysql> 
>Repare que o mysql não exigiu autenticação. É possível logar no servidor sem ter que digitar a senha.
#### - EXIBINDO AS BASES DE DADOS NO SERVIDOR
    mysql> show databases;
O comando acima retorna:

    +--------------------+
    | Database           |
    +--------------------+
    | crud               |
    | exemplo1           |
    | exemplo2           |
    | fsphp              |
    | information_schema |
    | loja               |
    | mysql              |
    | performance_schema |
    | sys                |
    +--------------------+
    9 rows in set (0.01 sec)
#### - CRIANDO A BASE DE DADOS `db_crud`
    CREATE DATABASE db_crud CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
#### - CRIANDO NA BASE DE DADOS `db_crud`, A TABELA `tbl_users`.
    create table tbl_users
    (
        id int auto_increment primary key,
        first_name varchar(50) not null ,
        last_name  varchar(50) not null,
        email      varchar(50) not null,
        message    varchar(20) not null,
        ts timestamp null
    )ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
#### - ALTERANDO A COLLATE DO CAMPO `first_mame` DA TABELA `tbl_users`.     
    ALTER TABLE tbl_users MODIFY first_name varchar(50) COLLATE utf8mb4_0900_ai_ci;
#### - EXIBINDO OS CHARSET `SHOW CHARACTER SET`    
    mysql> SHOW CHARACTER SET;
    +----------+---------------------------------+---------------------+--------+
    | Charset  | Description                     | Default collation   | Maxlen |
    +----------+---------------------------------+---------------------+--------+
    | armscii8 | ARMSCII-8 Armenian              | armscii8_general_ci |      1 |
    | ascii    | US ASCII                        | ascii_general_ci    |      1 |
    | big5     | Big5 Traditional Chinese        | big5_chinese_ci     |      2 |
    | binary   | Binary pseudo charset           | binary              |      1 |
    | cp1250   | Windows Central European        | cp1250_general_ci   |      1 |
    | cp1251   | Windows Cyrillic                | cp1251_general_ci   |      1 |
    | cp1256   | Windows Arabic                  | cp1256_general_ci   |      1 |
    | cp1257   | Windows Baltic                  | cp1257_general_ci   |      1 |
    | cp850    | DOS West European               | cp850_general_ci    |      1 |
    | cp852    | DOS Central European            | cp852_general_ci    |      1 |
    | cp866    | DOS Russian                     | cp866_general_ci    |      1 |
    | cp932    | SJIS for Windows Japanese       | cp932_japanese_ci   |      2 |
    | dec8     | DEC West European               | dec8_swedish_ci     |      1 |
    | eucjpms  | UJIS for Windows Japanese       | eucjpms_japanese_ci |      3 |
    | euckr    | EUC-KR Korean                   | euckr_korean_ci     |      2 |
    | gb18030  | China National Standard GB18030 | gb18030_chinese_ci  |      4 |
    | gb2312   | GB2312 Simplified Chinese       | gb2312_chinese_ci   |      2 |
    | gbk      | GBK Simplified Chinese          | gbk_chinese_ci      |      2 |
    | geostd8  | GEOSTD8 Georgian                | geostd8_general_ci  |      1 |
    | greek    | ISO 8859-7 Greek                | greek_general_ci    |      1 |
    | hebrew   | ISO 8859-8 Hebrew               | hebrew_general_ci   |      1 |
    | hp8      | HP West European                | hp8_english_ci      |      1 |
    | keybcs2  | DOS Kamenicky Czech-Slovak      | keybcs2_general_ci  |      1 |
    | koi8r    | KOI8-R Relcom Russian           | koi8r_general_ci    |      1 |
    | koi8u    | KOI8-U Ukrainian                | koi8u_general_ci    |      1 |
    | latin1   | cp1252 West European            | latin1_swedish_ci   |      1 |
    | latin2   | ISO 8859-2 Central European     | latin2_general_ci   |      1 |
    | latin5   | ISO 8859-9 Turkish              | latin5_turkish_ci   |      1 |
    | latin7   | ISO 8859-13 Baltic              | latin7_general_ci   |      1 |
    | macce    | Mac Central European            | macce_general_ci    |      1 |
    | macroman | Mac West European               | macroman_general_ci |      1 |
    | sjis     | Shift-JIS Japanese              | sjis_japanese_ci    |      2 |
    | swe7     | 7bit Swedish                    | swe7_swedish_ci     |      1 |
    | tis620   | TIS620 Thai                     | tis620_thai_ci      |      1 |
    | ucs2     | UCS-2 Unicode                   | ucs2_general_ci     |      2 |
    | ujis     | EUC-JP Japanese                 | ujis_japanese_ci    |      3 |
    | utf16    | UTF-16 Unicode                  | utf16_general_ci    |      4 |
    | utf16le  | UTF-16LE Unicode                | utf16le_general_ci  |      4 |
    | utf32    | UTF-32 Unicode                  | utf32_general_ci    |      4 |
    | utf8mb3  | UTF-8 Unicode                   | utf8mb3_general_ci  |      3 |
    | utf8mb4  | UTF-8 Unicode                   | utf8mb4_0900_ai_ci  |      4 |
    +----------+---------------------------------+---------------------+--------+
    41 rows in set (0.01 sec)
> Repare que para o charset `utf8mb4` a collation é `utf8mb4_0900_ai_ci`.
#### - EXIBINDO OS CHARSET QUE CONTENHAM `utf...`    
    SHOW CHARACTER SET LIKE 'utf%';
    +---------+------------------+--------------------+--------+
    | Charset | Description      | Default collation  | Maxlen |
    +---------+------------------+--------------------+--------+
    | utf16   | UTF-16 Unicode   | utf16_general_ci   |      4 |
    | utf16le | UTF-16LE Unicode | utf16le_general_ci |      4 |
    | utf32   | UTF-32 Unicode   | utf32_general_ci   |      4 |
    | utf8mb3 | UTF-8 Unicode    | utf8mb3_general_ci |      3 |
    | utf8mb4 | UTF-8 Unicode    | utf8mb4_0900_ai_ci |      4 |
    +---------+------------------+--------------------+--------+
    5 rows in set (0.01 sec)

>Alterando o método de autenticação do root. O comando `ALTER USER` altera o método de autenticação do usuário root para um que use uma senha. O exemplo a seguir altera o método de autenticação para `mysql_native_password`:

    ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'Diferent@1968#';
>Alterando o método de autenticação do root. O comando `ALTER USER` altera o método de autenticação do usuário root para um que use uma senha. O exemplo a seguir altera o método de autenticação para `caching_sha2_password`:

    ALTER USER 'root'@'localhost' IDENTIFIED WITH caching_sha2_password BY 'Diferent@1968#';
>Agora:
>
    root@cloud18344:~# mysql -u root -p
    Enter password: Diferent@****# 
> 
>Verificando quais métodos de autenticação cada usuário utiliza
   
    SELECT user,authentication_string,plugin,host FROM mysql.user;
>Retorna:
    
    mysql> SELECT user,authentication_string,plugin,host FROM mysql.user;
    +------------------+------------------------------------------------------------------------+-----------------------+-----------+
    | user             | authentication_string                                                  | plugin                | host      |
    +------------------+------------------------------------------------------------------------+-----------------------+-----------+
    | user1            | *668425423DB5193AF921380129F465A6425216D0                              | mysql_native_password | %         |
    | debian-sys-maint | $A$005N]s;"azZNI
    T       OaijZQpZxQlq2DwIy3GfWsMGGFn/wV2YlH//rNbQExVNT9 | caching_sha2_password | localhost |
    | mysql.infoschema | $A$005$THISISACOMBINATIONOFINVALIDSALTANDPASSWORDTHATMUSTNEVERBRBEUSED | caching_sha2_password | localhost |
    | mysql.session    | $A$005$THISISACOMBINATIONOFINVALIDSALTANDPASSWORDTHATMUSTNEVERBRBEUSED | caching_sha2_password | localhost |
    | mysql.sys        | $A$005$THISISACOMBINATIONOFINVALIDSALTANDPASSWORDTHATMUSTNEVERBRBEUSED | caching_sha2_password | localhost |
    | root             | *0B65A16710B01533DBAA7AA5CC7AB93313B0ACD4                              | mysql_native_password | localhost |
    +------------------+------------------------------------------------------------------------+-----------------------+-----------+
    6 rows in set (0.00 sec)

</details>

<details>
<summary>Apache2 :eye: </summary> 

### APACHE NO UBUNTU
#### - INSTALL APACHE2
    sudo apt install apache2
#### - VERIFICANDO A VERSÃO
    apache2 -v
####  - STATUS DO SERVIÇO NO UBUNTU (Debian usa ` service ´)
    sudo systemctl status apache2 
####  - START DO SERVIÇO NO UBUNTU (Debian usa ` service ´)
    sudo systemctl start apache2    
### - APACHE NO DEBIAN
#### - STATUS DO SERVIÇO
    service apache2 status
#### - START NO SERVIÇO
    service apache2 start
</details>

<details>
<summary>ufw :eye: </summary> 
 
     sudo ufw app list
     sudo ufw allow in "Apache"
     sudo ufw status //Para verificar o status do UFW
     sudo ufw enable //Para habilitar o UFW
     sudo ufw disable //Se você decidir que não quer usar o UFW, você pode desativá-lo com esse comando.
     sudo ufw allow ssh //Para configurar seu servidor para permitir as conexões de entrada via SSH.
     sudo ufw allow 22 //No entanto, podemos realmente escrever a regra equivalente, especificando a porta em vez do nome do serviço.
     sudo ufw allow http
     sudo ufw allow https
     sudo ufw reset //Se você já tiver regras do UFW configuradas, mas decidir que quer começar novamente.                      
     sudo ufw reload
     sudo ufw status numbered //O comando status do UFW tem uma opção para mostrar números ao lado de cada regra
</details>

<details>
<summary>Git Hub :eye: </summary> 

#### GitHub - Comandos úteis
    git config user.name //Exibindo o nome do usuário git
    git config --global user.name "lucioweb" //Nome do usuário
    git config --global user.email "lucio.lemos.385@ufrn.edu.br" //Email do suário
    git --version //Exibe a versão instalada
    git config --list //Listando as configurações

>**Note**
><kbd>GIT</kbd> &ne; <kbd>GIT HUB</kbd> &ne; <kbd>GIT BASH</kbd>

>**Alert**
>
> De forma geral, ...
</details>

<details>
<summary>Curl :eye: </summary> 

#### - O QUE É E O QUE FAZ O `CURL`
Curl é uma ferramenta para transferir dados de/para um servidor, usando um dos protocolos suportados. Normalmente, usamos o HTTP, mas as opções são muitas, de FTP e GOPHER a IMAP e LDAP.
O cURL é uma ferramenta de `linha de comando` que funciona como interface para a biblioteca que faz o serviço pesado, o libcurl.
De forma geral, seu navegador realiza requisições web, recebe respostas, lê/escreve cookies e renderiza sua página. Você pode usar o cURL para fazer tudo isso, exceto a renderização, que cabe ao seu navegador.
Ele oferece uma infinidade de funções úteis como realização de autenticação, interação com API's, preencher formulários HTML, download de arquivos e páginas HTML, etc.
#### - INSTALANDO O  `CURL`
    sudo apt install curl
#### - CURL - VERSÃO DO `CURL` INSTALADA NO DEBIAN
    curl  -V //Verificando a versão instalada do curl
    curl -L www.alura.com/ //Visualizando o HTML do  site www.alura.com
    curl -O https://releases.ubuntu.com/20.04.1/ubuntu-20.04.1-desktop-amd64.iso //Fazendo download de arquivos
    curl -i https://www.alura.com/ //Agora temos um retorno diferente. Primeiro temos as informações de cabeçalho.
#### - IDENTIFICANDO O IP DA MÁQUINA VIA `CURL`
    curl http://icanhazip.com
</details>

<details>
<summary>NodeJS :eye: </summary> 

#### - Versão do Node instalada
    dev@dev:~$ node -v
    -> v20.13.1
    dev@dev:~$ npm -v
    -> 10.5.2
    dev@dev:~$ nvm -v
    -> 0.39.7
#### - Listando as versões instaladas
    dev@dev:~$ nvm ls
    -> v20.13.1
#### - Listando as versões do Node disponíveis para instalação via NVM
    nvm ls-remote //Lista as versões disponíveis do Node
#### - Usa uma versão específica do Node
    dev@dev:~$ nvm use 20
    -> Now using node v20.13.1 (npm v10.5.2)
</details>

<details>
<summary>SSH :eye: </summary> 

#### - Verificando se há chaves geradas no computador
    ls -al ~/.ssh
O comando acima retorna:
     
    total 24
    drwx------  2 dev dev 4096 May 28 07:46 .
    drwx------ 12 dev dev 4096 May 28 06:51 ..
    -rw-------  1 dev dev  464 May 28 07:22 id_ed25519
    -rw-r--r--  1 dev dev  109 May 28 07:22 id_ed25519.pub
    -rw-------  1 dev dev 1956 May 28 07:46 known_hosts
    -rw-------  1 dev dev 1120 May 28 07:45 known_hosts.old
#### - Edita a chave!?
    cat ~/.ssh/id_ed25519.pub
O comando acima retorna:

    ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAAAIJtbrJAkEGhsQHazSe7sFy4CcQbgEdCV6jPLCV
    9O2Nm6 lucio.lemos.385@ufrn.edu.br
#### - Você pode gerar uma nova chave SSH no computador local. Depois de gerar a chave, você pode adicionar a chave pública à sua conta em `GitHub.com` para habilitar a autenticação para operações do Git no SSH.
    ssh-keygen -t ed25519 -C "luciolemos.j5@gmail.com"
O comando acima retorna    
    
    Generating public/private ed25519 key pair.
    Enter file in which to save the key (/home/dev/.ssh/id_ed25519):
    /home/dev/.ssh/id_ed25519 already exists.
    Overwrite (y/n)? y
    Enter passphrase (empty for no passphrase):
    Enter same passphrase again:
    Your identification has been saved in /home/dev/.ssh/id_ed25519
    Your public key has been saved in /home/dev/.ssh/id_ed25519.pub
    The key fingerprint is:
    SHA256:2yHw+hDQzMwTaNv4bOISXWrZX4K2BA13OPAqI+KFN6o luciolemos.j5@gmail.com
    The key's randomart image is:
    +--[ED25519 256]--+
    |    .o..         |
    |    +B+..        |
    |   ..BXo         |
    |  . +o++         |
    |o.o=.O..S .      |
    |o.=oB Oo.+..     |
    | o + =oo.o.      |
    |. . . .o.        |
    |E  .    .        |
    +----[SHA256]-----+
#### - Listando as chaves
    ls -al ~/.ssh
O comando acima retorna:    
    
    total 24
    drwx------  2 dev dev 4096 May 28 07:46 .
    drwx------ 12 dev dev 4096 May 28 06:51 ..
    -rw-------  1 dev dev  464 May 29 06:47 id_ed25519
    -rw-r--r--  1 dev dev  105 May 29 06:47 id_ed25519.pub
    -rw-------  1 dev dev 1956 May 28 07:46 known_hosts
    -rw-------  1 dev dev 1120 May 28 07:45 known_hosts.old
#### 
    cat ~/.ssh/id_ed25519.pub
#### - Você pode testar se a chave SSH local funciona inserindo `ssh -T git@github.com` no terminal:
    ssh -T git@github.com
O comando acima retorna:

    Enter passphrase for key '/home/dev/.ssh/id_ed25519':
    Hi luciolemos! You've successfully authenticated, but GitHub does not provide shell access.
####
</details>

<details>
<summary>Ubuntu CLI :eye: </summary> 

    mkdir fsphp && cd $_ //Criando e acessando simultaneamente um diretório.
    pwd //Retorna o diretório corrente
    sudo apt install tree //Instala tree    
#### - Verificando a versão da distribuição instalada
     lsb_release -a
O comando acima retorna:

    No LSB modules are available.
    Distributor ID: Ubuntu
    Description:    Ubuntu 22.04.4 LTS
    Release:        22.04
    Codename:       jammy
#### - UPDATE DOS PACOTES DO UBUNTU
    $ sudo apt update
#### - UPGRADE
    $ sudo apt upgrade
#### - ALTERANDO AS PERMISSÕES
    root@cloud18344:~# chmod -R 777 /var/www/crud
#### - `which` e `whereis`
    Para localizar um programa instalado no Linux basta usar o comando which.
    Por exemplo, para localizar onde está o executável do Firefox digite:
    $ which firefox
    
    Para saber quais são os diretórios do programa instalado digite o comando whereis.
    Exemplo:
    $ whereis firefox


</details>

<details>
<summary>RUST :eye: </summary> 

#### - Instalando o RUST no Debian 12 com CURL
    curl --proto '=https' --tlsv1.2 -sSf https://sh.rustup.rs | sh
#### - Verificando a versão do RUST instalada
    $ rustc --version
Retorna:

    rustc 1.78.0 (9b00956e5 2024-04-29)
#### - Desisntalando o RUST do WSL Debian     
    ~$ rustup self uninstall
Retorna:

    Thanks for hacking in Rust!
    This will uninstall all Rust toolchains and data, and remove
    $HOME/.cargo/bin from your PATH environment variable.
    Continue? (y/N)
#### - Para iniciar um novo pacote com Cargo, use `cargo new`   
    cargo new hello_world
Vamos conferir o que o Cargo gerou para nós:

    dev@dev:~$ ls -l
    total 4
    drwxr-xr-x 4 dev dev 4096 Jun  1 06:44 hello_world
    dev@dev:~$ cd hello_world
    dev@dev:~/hello_world$ tree .
    .
    ├── Cargo.toml
    └── src
        └── main.rs
    
    2 directories, 2 files
    dev@dev:~/hello_world$
</details>

<details>
<summary>ELEARNING_PHP (PROJETO) :eye: </summary> 
 
#### CRIANDO O PROJETO `elearning_php ` NA RAÍZ DO SERVIDOR
     sudo mkdir /var/www/elearning_php
#### DANDO PERMISSÃO AO USUÁRIO CORRENTE SOBRE O DIRETÓRIO      
     sudo chown -R $USER:$USER /var/www/elearning_php
#### CRIANDO E EDITANDO COM O NANO O ARQUIVO ` elearning_php.conf ` 
     sudo nano /etc/apache2/sites-available/elearning_php.conf
#### CONFIGURAÇÃO DO HOST NO ARQUIVO ` elearning_php.conf `
     <VirtualHost 88.198.104.148:80>
         ServerName elearning_php
         ServerAlias www.elearning_php
         ServerAdmin webmaster@localhost
         DocumentRoot /var/www/elearning_php
         ErrorLog ${APACHE_LOG_DIR}/error.log
         CustomLog ${APACHE_LOG_DIR}/access.log combined
     </VirtualHost>
#### ATIVANDO O HOST (ENABLE SITE - ensite)
      a2ensite elearning_php
#### DESATIVANDO O HOST DEFAULT (DISABLE SITE - dissite)
      a2dissite 000-default
#### RELOAD NO APACHE      
      systemctl reload apache2
#### CRIANDO EDITANDO O ARQUIVO DE BOAS VINDAS DO APACHE PARA O HOST CRIADO
      sudo nano /var/www/elearning_php/index.html
#### ENTRANDO NO DIRETÓRIO DO PROJETO RECÉM CRIADO
      cd elearning_php
#### CRIANDO E EDITANDO O ARQUIVO DE TESTE DO PROJETO ` index.php `      
      sudo nano index.php
#### EDITANDO O ARQUIVO ` dir.conf` QUE ESTABELECE A PRECEDÊNCIA DOS ARQUIVOS NO SERVIDOR
      sudo nano /etc/apache2/mods-enabled/dir.conf
#### CONFIGURAÇÃO DO ARQUIVO ` dir.conf ` INDICANDO QUE ARQUIVOS COM EXTENSÃO ` *.php ` TÊEM PRECEDÊNCIA
     <IfModule mod_dir.c>
             DirectoryIndex index.php index.cgi index.pl index.html index.xhtml index.htm
     </IfModule>     
</details>

#### - CRIANDO A TABLE TODO-LIST
    CREATE TABLE db_example_database.tbl_todo_list (
      item_id INT AUTO_INCREMENT,
      content VARCHAR(255),
      PRIMARY KEY(item_id)
    );