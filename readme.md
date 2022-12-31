# Console Web App

Exemplo de como configurar os componentes de `console`, `doctrine` e `migrations` em um projeto fora
do symfony framework

### Instalação

```bash
# Instalar dependências
$ composer install

# Lista de comandos
$ php bin/console 

# Criar pasta var
$ mkdir "var"
```

### Exemplo de `.env`

```dotenv
APP_ENV=DEV
DOCTRINE_MODE=DEV

DATABASE_URL="sqlite:///var/banco.sqlite"
#DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7"
#DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=mariadb-10.5.8"
```