# Clone Repository
Go to your terminal and clone the repository:
```sh
git clone https://github.com/p2c6/post-app.git
```

After cloning the repository,go to the **post-app** directory:

```sh
cd post-app
```

Once you're in the **post-app** directory, install all dependencies.

```sh
composer install
```

After installing dependencies, set-up your env.

## Setup

Duplicate the .env.example located in your post-app root:

```sh
cp .env.example .env
```

After duplicating .**env**,  change the value of **APP_URL**.

```sh
APP_URL=http://localhost:8000
```

Edit your database in your **.env**, the database default name in your **.env** is **post_app** but you can edit it based on your preference:
```sh
DB_DATABASE=post_app
```

Don't forget to create your database on database admin tools like **phpmyAdmin** which its name is the same on your variable DB_DATABASE on your **.env** file.


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







