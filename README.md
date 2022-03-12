```
php -S localhost:8000 -t public/
```

## Commands Migrate

* composer require robmorgan/phinx
* vendor\bin\phinx init
* criar diretório: db/migrations
* vendor\bin\phinx create CreateTasksTable - configure tables
* vendor\bin\phinx migrate - execute and create tables
