# Multiple-Database-Connect-in-Laravel
To set up multiple databases, you just add them to the `config/database.php` file. Each database needs a unique name and details like what type it is (like MySQL, MongDB, SQLLite etc), where it's located, and login info.

After you've set up the databases, you can use them anywhere in your app by saying which one to use when you make a database request. You can easily switch between databases while your app is running, so you can work with different data sources without any trouble.

![Project Preview](./assets/laravel-telescope.png)

```bash
git clone https://github.com/ruhulamin63/Multiple-Database-Connect-in-Laravell.git
```

```bash
cp .env.example .env
```

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your-db-name
DB_USERNAME=root
DB_PASSWORD=
```

```bash
composer update
```

```bash
php artisan migrate
```

### Public Access Route
For first db access
```bash
localhost:8000/get-mysql-products
```
For second db access
```bash
localhost:8000/get-mysql-second-products
```

### Set ENV Variable

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=first-db
DB_USERNAME=root
DB_PASSWORD=
   
DB_CONNECTION_SECOND=mysql
DB_HOST_SECOND=127.0.0.1
DB_PORT_SECOND=3306
DB_DATABASE_SECOND=second-db
DB_USERNAME_SECOND=root
DB_PASSWORD_SECOND=
```

### Database Configuration
```bash
<?php
  
use Illuminate\Support\Str;
  
return [
   
    'default' => env('DB_CONNECTION', 'mysql'),
   
    'connections' => [

        .....

        'mysql_second' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL_SECOND'),
            'host' => env('DB_HOST_SECOND', '127.0.0.1'),
            'port' => env('DB_PORT_SECOND', '3306'),
            'database' => env('DB_DATABASE_SECOND', 'forge'),
            'username' => env('DB_USERNAME_SECOND', 'forge'),
            'password' => env('DB_PASSWORD_SECOND', ''),
            'unix_socket' => env('DB_SOCKET_SECOND', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        .....
    ]
]
```