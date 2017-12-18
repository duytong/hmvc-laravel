<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Structure

### Root directory:
`app/Modules`

### Core file:
* route.stub
* model.stub
* controller.stub
* migration.stub
* ModuleServiceProvider.php

## How to usage

### Execute the console command:
`php artisan module:make {module} {--m}`

*{module}:* Module name.

*{--m}:* Create migration.

### Example:
`php artisan module:make Github`

If you want to create a migration:

`php artisan module:make Github --m`

### Result:
Path: `app/Modules/Github`

Content:

* Controllers
  * GitHubController.php
* Models
  * GitHub.php
* Views
* routes.php