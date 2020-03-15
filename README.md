# Laravel Form

This is an Laravel component made just for testing.

## Requirements

PHP >= 7.2
Composer
Npm

## Installation

Unzip the files into any folder, go into that folder and run the next command to install all PHP dependences:

```composer install```

Scripts are already built for dev and production. However if testing, it's better to install required packages by executing:

```npm install```

Now rename the included ```.env.example``` file to ```.env``` and then generate the Laravel App key using the command ```.php artisan key:generate```.

## How to run the APP

Start the bundled development server using the next command:

```php artisan serve``` 

You can then access the URL http://localhost:8000/ in your local to view the index page of the project.

The index page just displays a simple form including a text box and a button. Enter a number to save it into your PHP session.