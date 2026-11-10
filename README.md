# Online PC Repair Shop

A PHP + MySQL website for a PC repair service. Customers can browse repair services and place orders, and an admin panel lets staff manage services, categories, orders and admin accounts.

> **Learning project.** This was built as a university project and is not hardened for real-world use. The admin login and forms pass user input straight into SQL queries (open to SQL injection) and passwords are not stored with modern hashing. Use prepared statements and `password_hash()` / `password_verify()` before running anything like this in production.

## Features

- Home, services, about, location and contact pages
- Service ordering form
- Admin panel: login, manage admins, services, categories and orders

## Tech stack

- PHP (no framework)
- MySQL / MariaDB
- HTML + CSS

## Run it locally (XAMPP)

1. Install [XAMPP](https://www.apachefriends.org/) and start **Apache** and **MySQL**.
2. Copy this folder into `xampp/htdocs/`.
3. In phpMyAdmin, create a database with the name set in `config/constants.php` and create the tables the pages use.
4. Check the `SITEURL` and database settings in `config/constants.php`.
5. Open `http://localhost/<folder-name>/` in your browser. The admin panel is at `/admin/`.

## Project structure

```
admin/            Admin panel pages
config/           Site URL and database connection settings
css/              Stylesheets
images/           Site images
partials-front/   Shared header/footer for the public site
*.php             Public pages
```
