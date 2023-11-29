<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://i.imgur.com/c0yxQcD.png" width="100" alt="Laravel Logo"></a></p>

## About Music Laravel Website

Welcome to our music-centric Laravel website, a digital symphony of technology and art. This is a simple Music website using Laravel 10.

![Image](https://imgur.com/glxxZfJ.png)
![Image](https://imgur.com/EWrgIbG.png)

## How install

You can simply run the project by following process.
```shell
$ git clone https://github.com/Owf2612/Music-Laravel-Website.git
```

```shell
$ cd Music-Laravel-Website
```

```shell
$ composer install
```

```shell
$ npm install
```

Make sure you have Node.js and continue running the devs below
```shell
$ npm install --save-dev vite
```

```shell
$ npm install -D tailwindcss
```

Import sql and set up .env file from sql folder.

Then run the following commnad.
```shell
$ php artisan migrate:refresh
```
To have an admin account upload or edit or delete music, use the following command to insert the admin user into the database.
```shell
$ php artisan db:seed --class=AdminUserSeeder
```

Account admin
```shell
$ admin@example.com
$ admin
```
Visit http://127.0.0.1:8000/ and enjoy.
