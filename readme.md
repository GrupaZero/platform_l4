## GZERO CMS PLATFORM [![Build Status](https://travis-ci.org/GrupaZero/platform.png?branch=master)](https://travis-ci.org/GrupaZero/platform) [![Coverage Status](https://coveralls.io/repos/GrupaZero/platform/badge.png)](https://coveralls.io/r/GrupaZero/platform)

GZERO CMS PLATFORM it's a base to build custom application on GZERO CMS

**The project is still in the phase of intensive development**

## Installation

Clone this project directly form github

Install dependencies

```
composer install
```

Create and configure database:
 - create database and user
 - create .env.dev.php in root directory and put your credentials in it
 
 ```PHP
<?php
 return [
     'DB_NAME' => 'database_name',
     'DB_USER' => 'database_user',
     'DB_PASS' => 'database_password'
 ];
 ```
 - create database schema (remember to set env to dev)
 
```
php artisan migrate --package=gzero/cms
```

 - you can seed database with example data using this command
 
```
php artisan db:seed --class="Gzero\Core\CMSSeeder"
```
 - run php build in server
  
```
php artisan serve
```
 - done
 
 To check progress on project development you can occasionally run composer install
