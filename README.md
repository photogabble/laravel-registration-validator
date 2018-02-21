<h1 align="center">Laravel Registration Validator</h1>
<p align="center"><em>Solid credential validation for Laravel >= 5.5</em></p>

<p align="center">
  <a href="https://travis-ci.org/photogabble/laravel-registration-validator"><img src="https://travis-ci.org/photogabble/laravel-registration-validator.svg?branch=master" alt="Build Status"></a>
  <a href="https://packagist.org/packages/photogabble/laravel-registration-validator"><img src="https://img.shields.io/packagist/v/photogabble/laravel-registration-validator.svg" alt="Latest Stable Version"></a>
  <a href="LICENSE"><img src="https://img.shields.io/github/license/photogabble/laravel-registration-validator.svg" alt="License"></a>
</p>

### About this package

> _An all-Latin username containing confusables is probably fine, and an all-Cyrillic username containing confusables is probably fine, but a username containing mostly Latin plus one Cyrillic code point which happens to be confusable with a Latin one… is not._ - [James Bennet](https://www.b-list.org/weblog/2018/feb/11/usernames/)

This package is a Laravel validation wrapper around the [PHP Confusable Homoglyphs library](https://github.com/photogabble/php-confusable-homoglyphs) to provide your application the ability to validate user input as not containing dangerous confusables.

I began writing this package soon after reading the above quote from [this article](https://www.b-list.org/weblog/2018/feb/11/usernames/) by James Bennett on registration credential validation that referenced how [Django’s auth system](https://github.com/ubernostrum/django-registration/blob/1d7d0f01a24b916977016c1d66823a5e4a33f2a0/registration/validators.py) validates new users credentials.

In addition to unicode confusables validation this package also includes a PHP port of the reserved name validation that Django's auth system uses.

This is a PHP7 project built for use with Laravel versions 5.5 and above.

### Install

Install this library with composer: `composer require photogabble/laravel-registration-validator`.

### Usage

This package provides three validators: `not-reserved-name`, `not-confusable-string` and `not-confusable-email`.

#### Not Reserved Name Validator

This validator checks the input to ensure it does not contain any strings listed within config key `registration-validation.reserved_list`. To extend this list use the `php artisan vendor:publish` command to copy this config to your project.

#### Not Confusable String Validator

This validator checks the input using the [PHP Confusable Homoglyphs library](https://github.com/photogabble/php-confusable-homoglyphs) to ensure it does not contain any confusable unicode characters.

#### Not Confusable Email Validator

This validator does not validate that the input is a valid email address, instead it validates that a string containing an `@` does not contain any confusable unicode characters for each part either side of the `@` symbol.
