# New Project

## Creation
> Create a new repository on GitHub
> 
> **RUN** `composer create-project digbang/laravel-api-project:dev-main {project-name}`

## Creation if PHP version is not meet
_Could not find package digbang/laravel-api-project with version {version} in a version installable using your PHP version, PHP extension and Composer version._

> Clone this repository `git clone https://github.com/digbang/laravel-api-project {project-name}`
> 
> **RUN** `cd {project-name}`
> 
> **RUN** `cp .env.example .env`
> 
> **RUN** `php composer/replace_names.php`

### Install Composer dependencies
> **RUN** `docker-compose run {project-name}-php composer install`
> 
> Or build entire Docker running: `docker-compose up -d --build`

### Additional steps
> **RUN** `docker-compose run {project-name}-php php artisan key:generate`
>
> **RUN** `rm -rf create-project.md`

## After creating the project
> **RUN** `rm -fr .git` if needed (after clone this repository, for example)
> 
> **RUN** `git init`
>  
> **RUN** `git add .`
> 
> **RUN** `git commit -m "first commit"`
> 
> **RUN** `git branch -M main`
> 
> **RUN** `git remote add origin git@github.com:{owner}/{repository}.git`
> 
> **RUN** `git push -u origin main`
