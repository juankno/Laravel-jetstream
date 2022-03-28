# Laravel Jetstream starter

This is a project based in the basic use of package jetstream of laravel. It uses the authentication based in jetstream and livewire.

## Getting started

### Launch the starter project

*(Assuming you've [installed Laravel](https://laravel.com/docs/8.x))*

Fork this repository, then clone your fork, and run this in your newly created directory:

``` bash
composer install
```

Next you need to make a copy of the `.env.example` file and rename it to `.env` inside your project root.

Run the following command to generate your app key:

``` bash
php artisan key:generate
```

Then start your server:

``` bash
php artisan serve
```

Next config your database and use:

``` bash
php artisan migrate
```

now you can use for the authentication package:

``` bash
npm install && npm run dev
```

*If you need more information about laravel passport then you can read the documentation
([Laravel Jetstrean]https://laravel.com/docs/8.x/starter-kits#laravel-jetstream))*

Your Laravel starter project is now up and running! 


## Licence
The Laravel framework and this project is open-sourced software licensed under the MIT license.
