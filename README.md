# Transactions coding challenge

I have created an app with Laravel, react, tailwind and postgres in which we seed data into the database, then we created two pages /groups and /groups/{id} where the id is the group id, these pages get the data from the different groups that we have and display the detailed data about them.
The test took me approximately 5 hours to do it, but mainly it was because I haven't used laravel in a while.

## Getting started
Before you begin, make sure you have Docker and Docker Compose installed on your system.

### Clone the repository:

```
git clone <https://github.com/noriega9807/groupTransactions>
```
### Install the project dependencies:

```
cd <project-directory>
composer install
```

### Create a .env file by copying the .env.example file:

```
cp .env.example .env
```

### Generate an application key:

```
php artisan key:generate
```

### Start the development environment using Laravel Sail:

```
./vendor/bin/sail up
```
This command will start the development environment using Docker Compose. It will download the required Docker images and start the containers.

### Run the database migrations:

```
./vendor/bin/sail artisan migrate
```

### Seed data into the database:

```
./vendor/bin/sail php artisan db:seed
```

Finally, you can now open localhost in order to see the appliction running