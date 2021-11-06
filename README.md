# Onion



As part of this project, I've created a boilerplate Clean Architecture (onion architecture)for the Laravel framework. it's powered by the latest version of PHP

![Clean Architecture](https://blog.cleancoder.com/uncle-bob/images/2012-08-13-the-clean-architecture/CleanArchitecture.jpg)

The Onion Architecture relies heavily on the Dependency Inversion principle.  The application core needs implementation of core interfaces, and if those implementing classes reside at the edges of the application, we need some mechanism for injecting that code at runtime so the application can do something useful.

The database is not the center.  It is external.   Externalizing the database can be quite a change for some people used to thinking about applications as “database applications”.  With Onion Architecture, there are no database applications.  There are applications that might use a database as a storage service but only through some external infrastructure code that implements an interface that makes sense to the application core.  Decoupling the application from the database, file system, etc, lowers the cost of maintenance for the life of the application.

## Installation



```bash
cp .env.example .env

docker-compose build
docker-compose up -d

php artisan key:generate
php artisan passport:keys
php artisan optimize
php artisan api:cache
php artisan migrate

npm i
npm run prod
```

