# project-name

## Installation
1. composer create-project digbang/laravel-api-project:dev-main {project-name: default is "laravel-api-project"}
2. Start the containers
3. Access the PHP container named as `project-name-php` and:

> A. **RUN** `composer install`
 
> B. **RUN** `php artisan migrate` (optional)

## Composer Git Hooks (cghooks)

If a git repository has already been initialized, you can add the Composer Git Hooks to the .git/hooks directory:

**RUN** `composer cghooks add`.

## Security Advisories - Track vulnerable dependencies

**RUN** `composer security:check`

This package ensures that your application doesn't have installed dependencies with known security vulnerabilities.

This check runs on every `composer install` or `composer update` command, so you don't need to run it manually.

## Pint - Code Style fixer

**RUN** `composer pint`

Laravel Pint is an opinionated PHP code style fixer for minimalists. Pint is built on top of PHP-CS-Fixer and makes it simple to ensure that your code style stays clean and consistent.

## PHP Stan

**RUN** `composer stan`

You should now have a ``phpstan.neon`` file that allows you to configure the basics of this package.

https://github.com/nunomaduro/larastan
https://phpstan.org/user-guide/getting-started

## PHP Insight

**RUN** `composer insight`

### Config File

You should now have a ``config/insights.php`` file that allows you to configure the basics of this package.

https://phpinsights.com/get-started.html

## Laravel IDE Helper

**RUN** `composer ide-helper:generate` - PHPDoc generation for Laravel Facades

**RUN** `composer ide-helper:models` - PHPDocs for models

**RUN** `composer ide-helper:meta` - PhpStorm Meta file

This package generates helper files that enable your IDE to provide accurate autocompletion. Generation is done based on the files in your project, so they are always up-to-date.

https://github.com/barryvdh/laravel-ide-helper

## Pest

**RUN** `composer test` or `php artisan test --parallel`

Pest is a testing framework with a focus on simplicity
