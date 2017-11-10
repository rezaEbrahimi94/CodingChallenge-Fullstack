## Coding Challenge
###### Full-stack
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/605e37f6e1504348b5b29d31e3d90f6c)](https://www.codacy.com/app/0plus1/CodingChallenge-Fullstack?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=0plus1/CodingChallenge-Fullstack&amp;utm_campaign=Badge_Grade)
[![Build Status](https://travis-ci.org/0plus1/CodingChallenge-Fullstack.svg?branch=master)](https://travis-ci.org/0plus1/CodingChallenge-Fullstack)


This coding challenge has been created to evaluate the skills of a full stack Laravel developer.
Given the complete freedom on how to solve the challenge, an understanding of best practices and patterns will emerge.



### Challenge

Fork this repository and create a pull request when the challenge is complete.

You are given two tables _books_ and _shelves_. A book belongs to a shelf. Shelves have many books.

You are asked to:

Create a new route (eg: _/shelf/{shelf_slug}/read_) which will display all books belonging to that shelf (name, ISBN).
When a user clicks on the book name, make an ajax request to (_/api/metadata/read/all_) and log to the console the metadata for that specific book.

How you achieve this result is completely up to you.

There is an optional task defined in the [optional.md](optional.md) file.

Bonus points (in order of importance):

* Using ES6 javascript
* Not using jQuery for the AJAX call
* Applying your own custom CSS
* Displaying the metadata on the page instead of logging it to the console
* Unit testing
* Using the repository pattern to abstract Eloquent interactions 

Please note that the time taken to complete this challenge will be taken into consideration, starting when you fork the repository and ending with the pull request.

Please follow these coding guidelines:

* PHP [PSR-2](http://www.php-fig.org/psr/psr-2/) style guide.
* JS [AirBnB](https://github.com/airbnb/javascript) style guide (already configured in JSLinter)

### Required Knowledge

* PHP 7.1
* Javascript
* MySQL
* NPM
* Composer
* GIT
* MVC Pattern
* ORMs

Recommended
* ES6
* Laravel
* Eloquent
* PHP Unit

### Software requirements
* [Composer](https://getcomposer.org/)
* [NPM](https://www.npmjs.com/get-npm)
* Local webserver running PHP 7.1 and MySQL 5.5+ (if you are running OSx [Valet](https://laravel.com/docs/5.5/valet) is a quick solution) 

#### Install

Clone and create the .env file (an example has been provided in the __env_ folder)

Run:
```bash 
composer install
cp _env/local.env .env
php artisan migrate
php artisan db:seed
npm install
npm run dev
```

Make sure everything is working on your local server. Visiting / should display "_Welcome!_".
Double check by running the provided unit tests.

```bash
vendor/bin/phpunit --verbose
```

You can run the linter using this command
```bash
./node_modules/.bin/eslint resources/assets/js/app.js 
```

## License

[MIT license](http://opensource.org/licenses/MIT).
Feel free to remix, use and contribute to this coding challenge. Just make sure to let me know in the pull request this is not from a candidate.
