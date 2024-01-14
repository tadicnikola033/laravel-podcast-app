# Setup application:
### 1. install php
	Download it from here: https://windows.php.net/download#php-8.3 Be careful to choose thread safe version! - e.g. VS16 x64 Thread Safe (2023-Dec-20 14:24:44)
	Download it as zip file and extract it where you want(for me it is installed on location: C:\Program Files\php-8.3.1-Win32-vs16-x64).

### 2. install laravel and composer:
	Follow this tutorial: https://laravel.com/docs/4.2#install-composer

### 3. Uncomment(remove ;) these things in php configuration file (php.ini file - be careful to choose the right one - so not development, not production, just php.ini - Type is: configuration settings):
	extension_dir="ext"
	extension=pdo_mysql
	extension=fileinfo

### 4. Download 7-Zip from here: https://www.7-zip.org/ and run installation (exe file).

### 5. Download mysql from here: https://dev.mysql.com/downloads/installer/ and install it. Make sure you remember credentials(username and password) when you install mysql.

### 6. Edit environment system variables: 
	Type edit env... in search and open it. Under the System variables section find "Path" and click edit. There add 3 new variables - for php, composer and 7-Zip.
	For me it looks like this:
		C:\Program Files\php-8.3.1-Win32-vs16-x64
		C:\ProgramData\ComposerSetup\bin
		C:\Program Files\7-Zip
	
### 7. Open windows powershell or command prompt. Navigate to wanted location(wherever you want - use command cd to navigate) and create laravel project using command:
	laravel new laravel-podcast-app

### 8. Open created project folder in IDE (VS Code or PhpStorm or something else).

### 9. Open .env file and change credentials for mysql and db name - make sure you remember credentials(username and password) when you install mysql. For me it looks like this:
	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=laravel_api
	DB_USERNAME=root
	DB_PASSWORD=password

### 10. Open cmd or powershell terminal inside your IDE (e.g. VS Code) or just in separate window outside of IDE.
	Run these commands one by one:
		npm install
		composer install (if error, run it with ignore flag like this: composer install --ignore-platform-req=ext-fileinfo)

### 11. To run mysql server - type services in search and open it. Find Mysql server and start it. (it can be done using xamp if you are using it, i did it without xamp.)

### 12. Run migrations(only after mysql server has started) - it will create tables in database based on models in your app(first you will have only users table automatically added by laravel when creating project). 
	Run migrations now just to be sure that everything is set up correctly and that it works (later when you add other models appart from user you will have to rerun it to update database).
	Command is:
		php artisan migrate (If error "Could not find driver" - check this out: https://www.youtube.com/watch?v=SlcMyHvHno4)

	First time you run migrations, if you haven't previosly created mysql database with the same name that you used in .env file (DB_DATABASE=laravel_api),
	 it should ask you "Db with that name hasn't been found. Do you want to create it...". The answer is yes.

### 13. How to run app - In terminal run command: php artisan serve

### Useful tutorials to create rest api using laravel: 

 - https://www.youtube.com/watch?v=Vik6oo4O7xo&t=381s
 - https://www.youtube.com/watch?v=YGqCZjdgJJk




<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
