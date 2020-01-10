<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>
<p align="center">Administrador de Catálogo de Productos mediante Ajax y jQuery</p>


<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Acerca de Laravel 6.x con Ajax y jQuery

Este proyecto tiene como finalidad implementar un sistema informático minimalista, para la administración de un catálogo de productos haciendo uso de tecnologías PHP en el Backend y Ajax con jQuery en el Frontend

- Framework Laravel 6.x
- Framework Bootstrap 4.x
- Librería jQuery 3.x
- Ajax
- Componentes Laravel Collective HTML/FORM
- Base de Datos MySQL 5.x


#### Instalación

Configurar permisos en el directorio storage de la aplicación

~~~
sudo chmod 755 -R storage
~~~

Instalar las dependencias del proyecto
~~~
composer install
~~~

Crear una copia del archivo .env.example con la configuración correcta del proyecto. **Por ejemplo, credenciales de acceso a la Base de Datos**
~~~
cp .env.example .env
~~~

Crear un nuevo API Key para la aplicación
~~~
php artisan key:generate
~~~

Crear la base de datos para el proyecto mediante algún Sistema Administrador de Bases de Datos Relacionales soportado por Laravel. **Por ejemplo, MySQL.** Finalmente, registre las credenciales de acceso en el archivo de configuración .env
~~~
mysql> CREATE DATABASE nombre_db;
~~~

Ejecutar las migraciones y sembrar los datos de prueba
~~~
php artisan migrate --seed
~~~

Ejecutar la aplicación. **Por ejemplo, mediante el servidor HTTP integrado en Laravel**
~~~
php artisan serve
~~~

#### Instrucciones

Al iniciar la aplicación, es necesario registrar un usuario y hacer uso de dichas credenciales (sección de login) para administrar la información almacenada en el sistema.