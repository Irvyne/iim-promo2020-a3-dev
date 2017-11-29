# Symfony

*IIM teaching course about Symfony 4 & Flex :D* 

## Setup Project

1. Download/Clone project and open it in Terminal.

1. Install project dependencies.

```bash
composer install
```

2. Edit the file **.env** and modify the following line to match your credentials.

```dotenv
DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name
```

3. Ask doctrine to create the database.

```bash
php bin/console doctrine:database:create
```

4. Ask doctrine to create all tables & columns based on our entity mapping in **src/Entity/**

```bash
php bin/console doctrine:schema:update --dump-sql --force
```


## Let's Work

Start WebServer.

* In the background (Linux, Mac)

```bash
php bin/console server:start
```

* In the foreground (Windows) *because [PCNTL](http://php.net/manual/en/book.pcntl.php) is missing*

```bash
php bin/console server:run
```

## Structure

Checking out the Project Structure

* **config/**

Contains... configuration of course!. You will configure routes, services and packages.

* **src/**

All your PHP code lives here.
99% of the time, you'll be working in src/ (PHP files) or config/ (everything else). As you keep reading, you'll learn what can be done inside each of these.

So what about the other directories in the project?

* **bin/**

The famous bin/console file lives here (and other, less important executable files).

* **var/**

This is where automatically-created files are stored, like cache files (var/cache/) and logs (var/log/).

* **vendor/**

Third-party (i.e. "vendor") libraries live here! These are downloaded via the Composer package manager.

* **public/**

This is the document root for your project: you put any publicly accessible files here.

## Information

### Useful Commands

* Create database

```bash
php bin/console doctrine:database:create
```

* Update Schema (synchronize tables/columns)

```bash
php bin/console doctrine:schema:update --dump-sql --force
```

* Clear cache (is something is doing badly)

```bash
php bin/console cache:clear
```

### Dependencies

This project is using the following dependencies:

* Symfony Form Component (form abstraction) [Flex Recipe]

```bash
composer req form
```

* Symfony ORM Pack (doctrine, entity/database management) [Flex Recipe]

```bash
composer req orm
```

* Symfony Web Profiler (debugging) [Flex Recipe]

```bash
composer req profiler --dev
```

* Symfony Twig (templating engine) [Flex Recipe]

```bash
composer req twig
```

* Symfony Web Server (local server for development) [Flex Recipe]

```bash
composer req server --dev
```

* Sensio Framework Extra Bundle (eg. @Route annotations)  [Flex Recipe]

```bash
composer req annotations
```