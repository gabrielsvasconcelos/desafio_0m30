# desafio_0m30
 Repositório com o Desafio - Vaga - Pessoa desenvolvedora back-end PHP - Laravel - OM30
</br>
 Requisitos:</br>
 PHP, Apache, MYSQL, Composer instalados no computador.</br>
 Usar o terminal de sua preferência. Utilizei o PowerShell.</br>

 Como usar:</br>
 1 - Criar o banco de dados vazio com o nome de sua preferência. Eu utilizei MySql para criar o banco de dados.</br>
 2 - Adicionar o nome do banco de dados criado no arquivo .env na linha DB_DATABASE no DB_CONNECTION=mysql.</br>
 3 - Executar as migrações utilizando o comando [php artisan migrate].</br>
 4 - Ao executar o item 3, a tabela com os pacientes será criada no seu banco de dados, agora o código está pronto para ser utilizado, abra o terminal de sua preferência e navegue até a pasta do código.</br>
 5 - Ao chegar na pasta do código, execute o comando [php artisan serve] para criar um servidor utilizando o php.</br>
 6 - Quando o servidor for criado, irá aparecer no terminal a porta onde é possível acessar o código. Geralmente a porta é 8000.</br>
 7 - Para acessar basta escrever no navegador de sua preferência: localhost:8000/pacientes