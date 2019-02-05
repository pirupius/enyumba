Please read the [wiki](https://github.com/pirupius/Laravel-House-Listings-Real-Estate/wiki) on how to quickly set up. 

You can also read about the [Laravel Framework](https://laravel.com/docs) used [here](https://github.com/pirupius/Laravel-House-Listings-Real-Estate/wiki/Laravel-Framework)

## Overview
This repo is based on a house listing scenario. 

## Features
1. Content creation. Users can create their own listing and upload images of the listing.
2. Image upload and handling
3. Authentication and guards. Only registered users can create new listings and any single registered user can only edit his own listing. 

...more features will keep being added with time.

## Setup
1. git clone (project link)
2. composer install
3. cp .env.example .env (create an env file)
4. change the db configurations based on your env file
5. php artisan key:generate key
6. php artisan migrate --seed
7.install predis if its missing (composer require predis/predis:~1.0)

## Resources
1. Video Tutorials from [Laracasts](https://laracasts.com/series/build-project-flyer-with-me)


## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
