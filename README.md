
# Desafio Técnico – Desenvolvedor PHP com Laravel e Alpine.js
**Cyber Solutions**

Este projeto é uma aplicação web desenvolvida com Laravel + Alpine.js que permite cadastrar, listar, buscar, excluir e visualizar funcionários, com uma interface leve e moderna.

---

## 🚀 Tecnologias Utilizadas

- PHP 8.x  
- Laravel 12  
- PostgreSQL  
- Docker (ambiente containerizado)  
- Blade (Template Engine)  
- Bootstrap (Interface)  
- Alpine.js

---

## ⚙️ Funcionalidades

- Cadastro de novos funcionários
- Visualização de detalhes do funcionário
- Edição de dados com formulário pré-preenchido
- Exclusão com confirmação
- Busca por nome com filtro reativo


---


## ⚙️ Metodologia e Organização

- Alpine.js foi utilizado para reatividade simples no frontend sem necessidade de frameworks pesados.
- A lógica de paginação, filtro, ordenação e exibição foi escrita diretamente no componente Blade.
- Todas as operações (cadastrar, excluir, listar) são feitas via API (/api/funcionarios).
- Os dados são validados tanto no frontend quanto no backend para garantir consistência.


---

## ⚙️ Para fazer login 

- email = admin@example.com
- senhar = 123456789


---


## ⚙️ Instalação

### Usando Docker (Recomendado)

1. **Clone o repositório**
    ```bash
    git clone https://github.com/BrDanielSousa/cadastro-funcionarios.git
    cd cadastro-funcionarios
    ```

2. **Crie o arquivo `.env`**
    ```bash
    cp .env.example .env
    ```

3. **Configure as variáveis de ambiente no `.env`**
    ```
    DB_CONNECTION=mysql
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE=nome_do_banco
    DB_USERNAME=usuario
    DB_PASSWORD=senha
    ```

4. **Suba os containers Docker**
    ```bash
    docker-compose up -d
    ```

5. **Instale as dependências do PHP**
    ```bash
    docker-compose run --rm composer install
    ```

6. **Gere a chave da aplicação**
    ```bash
    docker-compose run --rm artisan key:generate
    ```

7. **Execute as migrações e seeders**
    ```bash
    docker-compose run --rm artisan migrate --seed
    ```

8. **Crie o link simbólico do storage**
    ```bash
    docker-compose run --rm artisan storage:link
    ```

9. **Ajuste as permissões do storage**
    ```bash
    docker exec -it cadastro-funcionario-app chown -R www-data:www-data /var/www/storage
    ```

10. **Instale as dependências do Node.js**
    ```bash
    docker-compose run --rm npm install
    ```

11. **Compile os assets**
    ```bash
    docker-compose run --rm npm run build
    ```

---

### Instalação Manual (Sem Docker)

1. **Clone o repositório**
    ```bash
    git clone https://github.com/BrDanielSousa/cadastro-funcionarios.git
    cd cadastro-funcionarios
    ```

2. **Crie o arquivo `.env`**
    ```bash
    cp .env.example .env
    ```

3. **Instale as dependências do PHP**
    ```bash
    composer install
    ```

4. **Gere a chave da aplicação**
    ```bash
    php artisan key:generate
    ```

5. **Execute as migrações e seeders**
    ```bash
    php artisan migrate --seed
    ```

6. **Inicie o servidor**
    ```bash
    php artisan serve
    ```
