<p align="center"><img src="./public/img/Readme.MD/screenshootFigma/logofinal.PNG?raw=true" width="400"></a></p>


KLikShare
============

***

## Contexto del proyecto

Crear una web donde un usuario puede poner objetos para regalar y donde otros usuarios lo pueden solicitar, un wallapop gratis.

En este proyecto vamos a desarrollar una startup tecnológia y su aplicación Web MVP.

Para ello buscaremos resolver un problema actual mediante una solución Web, prepararemos un Pitch para la presentación a posibles inversores, diseñaremos un prototipo, un RoadMap y desarrollaremos el producto mínimo viable.

## Requisitos funcionales

La aplicación debe cumplir uno o más de estas características:
<ul>
<li>Características de Red Social</li>
<li>Características de e-commerce</li>
<li>Características de gestor de contenidos</li>
<li>Características de accesibilidad para colectivos vulnerables</li>
<li>Características de herramientas de apoyo a causas sociales o a colectivos vulnerables.</li>
</ul>


## Requisitos no funcionales:


<ul>
<li>La web deberá estar en un servidor aunque esté en desarrollo.</li>
<li>Todos los requisitos y casos de uso deberán estar testeados (tests de aceptación).</li>
<li>Todo el código fuera del framework deberá ser testeado (tests unitarios).</li>
<li>Se deberá usar Laravel.</li>
<li>Los procesos ‘largos’ deberán hacer uso de un sistemas de colas.</li>
</ul>



## Entrega:

<ul>
<li>- Un link a un repositorio de github</li>
<li>- Readme del repositorio con mínimo: Explicación del proyecto, Diagramas (Flujo y DB: Entidad-Relación).</li>
<li>- Sketch - mockup</li>
<li>- Url en ‘deploy’.</li>
<li>- Presentación en diapositivas</li>
<li>- Pitch + Demo and code review</li>

</ul>

***
***


## Required

- PHP 7.4 min
- Composer installed

## Install Project

1. Clone git https://github.com/KlikProjects/KLikShareBACK.git
2. Crear una base de datos en phpMyAdmin en local, con los credenciales - user : root, password : ""
3. Nombre de base de datos : klikShare
4. Ejecutar Migracion "php artisant migration:fresh --seed"
5. La migracion creara 1 root como admin, 2 usuarios vendedores y 2 usuarios compradores al igual que una lista de productos ficticios.


## Install

- composer install and/or composer update
- npm run watch

Tambien

passport :

- composer require laravel/passport
- php artisan migrate
- php artisan passport:install
- php artisan passport:client --personal

Fruitcake :

- composer require fruitcake/laravel-cors
- dentro de la seccion "protected $middleware" del fichero /app/Http/Kernel.php esta linea \Fruitcake\Cors\HandleCors::class,



## Run tests

Para ejecutar los tests hay que descomentar 2 lineas en el "phpunit.xml"
```php
    <server name="DB_CONNECTION" value="sqlite"/>
    <server name="DB_DATABASE" value=":memory:"/>
```
        
- vendor/bin/phpunit 
- OK (8 tests, 13 assertions)
<img src="./public/img/Readme.MD/test/test.jpg?raw=true" width=60%>

***
***


# KlikShare

## 🛠️ Herramientas usadas en este proyecto
<ul>
  <li>Visual Studio Code</li>
  <li>Trello</li>
  <li>Figma</li>
  <li>Metodologías Ágiles</li>
  <li>Planning Poker</li>
  <li>GoogleDocs</li>
  <li>GoogleFonts</li>
  <li>Zoom</li>
  <li>Bootstrap</li>
  <li>Laravel</li>
  <li>SQL</li>
  <li>PHPMyAdmin</li>
  <li>Para el front hemos usado Vue.js aqui esta el proyecto https://github.com/KlikProjects/KlikShareFront.git</li>    
</ul>


## ✒️ Autores 
<ul>
  <li>Alexandra</li>
  <li>Andreu (Product Owner)</li>
  <li>Armando</li>
  <li>David (Scrum Master)</li>
  <li>Jose Miguel</li>
  <li>Solomon</li>
</ul>

También pueden mirar la lista de todos los [contribuyentes](https://github.com/KlikProjects/KLikShare/graphs/contributors) quienes han participado en este proyecto.  
