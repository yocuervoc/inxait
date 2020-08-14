## Para correr el proyecto de forma local
```
installar las de dependencias
```
crear una base de datos con el nombre inxait, es el motor mysql
```
configurar las variables
```
-DB_CONNECTION=mysql
-DB_HOST=127.0.0.1
-DB_PORT=3306
-DB_DATABASE=laravel
-DB_USERNAME=root
-DB_PASSWORD=password

```
correr todas las migraciones: php artisan migrate
```
correr el proyecto: php artisan serve
```
links locales de la app:
```
http://localhost:8000/inscripcion
```