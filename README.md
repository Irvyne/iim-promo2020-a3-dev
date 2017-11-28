# Symfony


## Setup


Download project.


Open your terminal and change directory to your projet dir.


Then install composer dependencies.


`composer install`


After you have to edit the file `.env` and modify the line `DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name` to match your credentials.


Then we ask doctrine to create the database.


`php bin/console doctrine:database:create`


ANd finally we ask doctrine to create all tables & columns based on our entity mapping (src/Entity/*)


`php bin/console doctrine:schema:update --dump-sql --force`


## Use project


Start webserver by `php bin/console server:start` OR `php bin/console server:run`

