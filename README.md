# Clone Repository
Go to your terminal and clone the repository:
```sh
git clone https://github.com/p2c6/post-app.git
```

After cloning the repository,go to the **tallstack-post-app** directory:

```sh
cd tallstack-post-app
```

Once you're in the **tallstack-post-app** directory, install all dependencies.

```sh
composer install
```

After installing dependencies, set-up your env.

## Setup

Duplicate the .env.example located in your tallstack-post-app root:

```sh
cp .env.example .env
```

After duplicating .**env**,  change the value of **APP_URL**.

```sh
APP_URL=http://localhost:8000
```

After setting up **.env**, link the storage with the command below:

```sh
php artisan storage:link
```

Run the migration and the seeder:

```sh
php artisan migrate:fresh --seed
```

Create your app key with the command:

```sh
php artisan key:generate
```

Lastly, run the server with the command:
 
```sh
php artisan serve
```

After all the set-up, you can check the backend which runs on **http://localhost:8000**

## Note

If you encounter problem, try clearing the cache, etc., 

```sh
php artisan optimize:clear
```

Then run the server again:

```sh
php artisan serve
```

## Example user

email: test@example.com

password: password







