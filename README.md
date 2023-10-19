
# Laravel Admin Boilerplate



#### Installation

- Clone the repository:
```bash
git clone git@github.com:boolfalse/laravel-boilerplate.git
cd laravel-boilerplate
```

- Install dependencies:
```bash
composer install
npm install
npm run dev
```

- Create a database (sample for MySQL below):
```bash
mysql -u <USER> -p

CREATE DATABASE laravel_boilerplate;
CREATE USER 'laravel_boilerplate'@'localhost' IDENTIFIED BY '<PASSWORD>';
GRANT ALL PRIVILEGES ON laravel_boilerplate.* TO 'laravel_boilerplate'@'localhost';
FLUSH PRIVILEGES;
```

- [OPTIONAL] Laravel resources (files/folders) ownerships/permissions:
```
# one-time command for the PC:
sudo usermod -a -G www-data $USER

# setup ownerships/permissions
sudo chown -R $USER:www-data storage/ bootstrap/cache/
sudo chgrp -R www-data storage bootstrap/cache/
sudo chmod -R ug+rwx storage bootstrap/cache/
```

- Set the credentials in `.env` file (copy `.env.example` to `.env` and edit it).
```bash
php artisan key:generate
php artisan optimize
```

- Run migrations and seeders:
```bash
php artisan migrate:fresh --seed
```



#### Author:

- Author: [BoolFalse](https://boolfalse.com/)
