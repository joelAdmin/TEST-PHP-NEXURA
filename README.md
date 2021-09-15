<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

##instalacion 
**CREAMOS REPOSITORIO EN GITHUB
	echo "# TEST-PHP-NEXURA" >> README.md
	git init
	git add README.md
	git commit -m "first commit"
	git branch -M main
	git remote add origin https://github.com/joelAdmin/TEST-PHP-NEXURA.git
	git push -u origin main

**CREAMOS TOKEN PERSONAL POR 30 DIAS
	ghp_

**CREAMOS PROYECTO DE LARAVEL 
	composer create-project --prefer-dist laravel/laravel:^7.0 test-php-nexura
	Package manifest generated successfully.
	> @php artisan key:generate --ansi
	Application key set successfully.

**CONFIGURACION DE MANEJADOR DE VERSIONES GIT CON REPOSITORIO GITHUB	
	git init
	git remote add origin https://github.com/joelAdmin/TEST-PHP-NEXURA.git	
	git add .
	git commit -m 'config repositorio gitHub'
	git log 
	git status
	git push origin master

**CREAMOS UNA RAMA DE TRABAJO
	git checkout -b nexura

**PUBLICAMOS LA RAMA PARA EL RESTO 
	git push origin nexura

**CREAMOS BASE DE DATOS 
	nexura

**CONFIGURAMOS ARCHIVO .env CON SUS VARIABLE DE ENTORNO
	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=nexura
	DB_USERNAME=root
	DB_PASSWORD=

**CREAR TABLAS SQL MEDIANTES EL SISTEMA DE MIGRACIONES DE LARAVEL PARA UN MAYOR COTROL.(LOS ARCHIVOS GENERTADOS SE GUARDAN EN database/migrations/)
	*CREAMOS LA PRIMERA TABLA  areas
		php artisan make:migration create_areas_table
	*CREAMOS LA SEGUNDA empleados
		php artisan make:migration create_empleados_table
	*CREAMOS LA TERCERA roles
		php artisan make:migration create_roles_table
	*POR ULTIMO TABLA PIVOT empleado_rol
		php artisan make:migration create_empleado_rol_table
	*EJECUTAMOS LAS MIGRACIONES CON:
		php artisan migrate
		/**Listo ya estan las tablas creadas**/ ayuda con el comando (php artisan)

** CONFIGURAMOS FRONTEND Y LIBRERIAS A UTILITLIZAR
  <link href="template/ruang-admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  	
**CREAMOS LOS MODELOS
	 php artisan make:model Empleado
	  php artisan make:model Role
	   php artisan make:model Area
	   
**CREAMOS LOS CONTROLADORES
	php artisan make:controller AreaController --resource
	php artisan make:controller EmpleadoController --resource
	php artisan make:controller RoleController --resource

**CREAMOS RUTAS  (routes/web.php)
	Route::post('/new', 'EmpleadoController@store');
	
** SE CREARON 3 AREAS TRES ROLES
	AREAS: administracion, contabilidad, sistema
	ROLES: Master, administrador y empleado
	
** OBSERVACION TUVE PROBLEMAS CON LA TABLA PIVOT empleado_rol:
	Esto se debe aque Laravel usa la siguiente sintaxis para crear tablas pivot   (tabla1EnSingular_tabla2EnSingular) es decir tabla 1 en     singular mas guion bajo  seguido de tablados en singular por loque tuve que realizar una modificacion solo para ese paso y cumplir con el requerimiento en el modelo:
	/test-php-nexura/app/Empleado.php
	 public function role(){
		return $this->belongsToMany('App\Role', 'empleado_rol', 'empleado_id', 'rol_id');
	   }
	   
**NOTA EL ACMPO INPUT LO DEJE TYPE="TEXT" PARA QUE VERIFIQUEN LA VALIDACION BACKEND
	<input type="text" class="form-control" id="email" name="email" placeholder="Nombre comple del empleado">

** LISTA DE EMPPLEADOS CON DATATABLE
	composer require yajra/laravel-datatables-oracle:"~9.0"
	
** ACTUALIZAR RAMA nexura 
	git add .
	git commit -m 'actualizando repositorio'
	git push
	
** HACER MERGE A LA RAMA MASTER
	git checkout master
	git merge nexura
	git push

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
