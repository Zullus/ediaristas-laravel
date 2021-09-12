## E-Diaristas Admin em Laravel

Projeto administrativo da plaraforma E-Diaristas, construído em Laravael

### Instalar

#### Clonar o repositório 

```
git clone git@github.com:Zullus/ediaristas-laravel.git
```

#### Instalar dependencias

```
composer install
```

Ou em ambiente de desenvolvimento

```
composer update
```

#### Criar arquivo de configurações de ambiente (.env)

Copiar o arquivo de exemplo `.env.example` para `.env` na raiz do projeto e configurar as configurações da aplicação e do banco de dados.

#### Criar a extrutura no banco de dado

```
php artisan migrate
```

Executar o servidor de desenvolvimento

```
php artisan serve
```
