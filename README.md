# Laravel 4 Project

## Installation

Get into `app/config/` and create a copy of `database_default.php` and `mail_default.php`.
Name the copies `database.php`, `mail.php` and configure them.

## Make sure app/storage is writable by your web server.

If permissions are set correctly:

    chmod -R 775 app/storage

Should work, if not try

    chmod -R 777 app/storage


## User login with commenting permission

Navigate to your Laravel 4 website and login at /user/login:

    username : user
    password : user

Create a new user at /user/create

### Admin login

Navigate to /admin

    username: admin
    password: admin
