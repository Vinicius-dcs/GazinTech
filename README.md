<h1 align="center"> ⚒️ CRUD Consumindo Dados de API ⚒️ </h1>

<p align="center">
    <a href="#sobre">Sobre</a> •
    <a href="#features">Features</a> •
    <a href="#tecnologias">Tecnologias</a> •
    <a href="#preRequisitos">Pré-Requisitos</a> •
    <a href="#instalandoAplicacao">Instalando Aplicação</a> •
    <a href="#utilizandoAplicacao">Utilizando Aplicação</a> •
    <a href="#licenca">Licença</a> •
    <a href="#autor">Autor</a> 
</p>

<h1> </h1>

<h1 id="sobre"> Sobre </h1>
<p> O projeto tem como objetivo atender os requisitos solicitados no teste para vaga de desenvolvedor da Gazin Tech, sendo este voltado para realizar as operações de um CRUD consumindo e enviando os dados por meio de uma API construída com o framework LUMEN. </p>

<h1 aligtn="center" id="features"> Features </h1>
<p>✅ Docker </p>
<p>✅ API </p>
<p>✅ Cadastrar Desenvolvedor </p>
<p>✅ Listar Desenvolvedor </p>
<p>✅ Alterar Desenvolvedor </p>
<p>✅ Excluir Desenvolvedor </p>
<p>❌ Testes Unitários </p>

<h1 aligtn="center" id="tecnologias"> Tecnologias </h1>
<p> 🚀 Docker </p>
<p> 🚀 Lumen - PHP Framework </p>
<p> 🚀 JQuery - JS Framework </p>
<p> 🚀 Bootstrap - CSS Framework</p>
<p> 🚀 PHP </p>
<p> 🚀 Java Script </p>

<h1 aligtn="center" id="preRequisitos"> Pré-Requisitos </h1>
<p> 👉 SGBD de sua preferência (recomendo Workbench)</p>
<p> 👉 Visual Studio Code</p>
<p> 👉 Git 2.33.1</p>

<h1 aligtn="center" id="instalandoAplicacao"> Instalando Aplicação </h1>
<p> 1° - Abrir o terminal (recomendo o GIT BASH) e selecionar o local para rodar o projeto através do comando CD (recomendo desktop); </p>
<p> 2° - Digitar o comando abaixo no terminal (será criado uma pasta chamada GazinTech no diretório selecionado com todo o projeto): </p>

~~~
git clone https://github.com/Vinicius-dcs/GazinTech.git
~~~

<p> 3° - Abrir a pasta GazinTech clonada através do git hub dentro do Visual Studio Code; </p>
<p> 4° - Abrir o terminal do próprio Visual Studio Code e digitar o comando abaixo (provavelmente irá demorar um pouco até finalizar a execução desse comando, pois nesse momento o docker irá buildar as imagens do PHP e MySQL): </p>

~~~
docker-compose up -d
~~~

<p> 5° - Agora vamos pegar o endereço IP para colocar no projeto! Primeiramente abrir o CMD do windows, digitar ipconfig, copiar o IP que está na linha "Endereço IPV4", abrir o arquivo .env localizado no caminho www\html\.env e substituir o IP que está na linha escrita "DB_HOST=" por o IP da sua máquina. Segue exemplo: </p>
<img alt="Imagem de como configurar IP" src=./www/html/github/ip_maquina.png width="80%;">

<p> 6° - Abrir um SGBD MySQL (recomendo o Workbench) e criar e abrir uma conexão com os seguintes parâmetros (todos estão no arquivo .env): </p>

<p> Connection Name: gazintech </p>
<p> Hostname: 127.0.0.1 </p>
<p> Port: 3306 </p>
<p> Username: root </p>
<p> Password: 1234 </p>

<p> 7° - Abrir o terminal do VS Code, entrar na pasta html do projeto pelo comando cd do terminal e após isso, digitar o seguite comando no terminal (será criado as tabelas no banco): </p>

~~~
php artisan migrate
~~~

<p> 8° - Pronto! Agora é basta acessar o projeto através da url http://localhost:8000/public/index.php/crud. Lembrando que dependendo do tipo da sua conexão o hostname pode variar e também é necessário utilizar a porta 8000 para que o projeto rode corretamente no docker. </p>

<h1 aligtn="center" id="utilizandoAplicacao"> Utilizando Aplicação </h1>
<p> Apresentação das funções do CRUD </p>
<img alt="GIF Readme" src=./www/html/github/funcoes.gif width="80%;">

<br>
<p> Como cadastrar um(a) novo(a) desenvolvedor(a) </p>
<img alt="GIF Readme" src=./www/html/github/cadastro.gif width="80%;">

<br>
<p> Como alterar um(a) desenvolvedor(a) </p>
<img alt="GIF Readme" src=./www/html/github/alteracao.gif width="80%;">

<br>
<p> Como excluir um(a) desenvolvedor(a) </p>
<img alt="GIF Readme" src=./www/html/github/exclusao.gif width="80%;">

<h1 aligtn="center" id="licenca"> Licença </h1>
<p> MIT License

Copyright (c) [2021] [Vinicius Costa]

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE. </p>

<h1 aligtn="center" id="autor"> Autor </h1>

<img src=./www/html/github/autorFoto.jpg style="border-radius: 50%;" width="100px;">
<p> > Vinicius Costa </p>

[![Linkedin Badge](https://img.shields.io/badge/-Vinicius-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/vinicius-d-6289a8123/)](https://www.linkedin.com/in/vinicius-d-6289a8123/) 
[![Gmail Badge](https://img.shields.io/badge/-vinisilval.a@gmail.com-c14438?style=flat-square&logo=Gmail&logoColor=white&link=mailto:vinisilval.a@gmail.com)](mailto:vinisilval.a@gmail.com)
