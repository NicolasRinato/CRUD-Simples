# CRUD Simples
## Aplicação desenvolvida utilizando um banco de dados para persistir dados de pessoas

### 🛠 Tecnologias utilizadas
- PHP
- HTML e CSS
- MySQL

### 📂 Estrutura do Projeto
- `index.php` → Página inicial  
- `create.php` → Cadastro de novas pessoas  
- `createOK.php` → Completa o cadastro  
- `read.php` → Escolha qual visualização deseja  
- `readAll.php` → Visualiza todos os cadastros  
- `readOnly.php` → Visualiza apenas um registro  
- `update.php` → Alteração de dados  
- `delete.php` → Exclusão de registros  
- `config.php` → Configuração do Banco de Dados  
- `pageStyle.css` → Estilo das páginas Web  

### 🗄 Estrutura do Banco de Dados
Para utilizar o programa, deve-se criar o banco de dados da aplicação, com o código abaixo:
```
CREATE DATABASE banco;
USE banco;

CREATE TABLE pessoas (
    cpf VARCHAR(20) PRIMARY KEY NOT NULL,
    email VARCHAR(100) NOT NULL,
    nome VARCHAR(200) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    nascimento DATE NOT NULL
);
```
### ⚙️ Configuração
No arquivo config.php, altere os parâmetros de conexão com o seu Banco de Dados:
```
$dataBase['server'] = 'localhost';
$dataBase['user'] = 'root';
$dataBase['password'] = '';
$dataBase['database'] = 'banco';
```
