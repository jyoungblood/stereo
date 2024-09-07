# STEREO

### A pragmatic toolkit for internet makers

- Documentation: [https://stereotk.com/](https://stereotk.com/)


STEREO is a "full stack" tool kit designed to make the process of developing dynamic server-rendered web applications significantly easier and more enjoyable.

It's designed for solo developers working in "small scale" environments. While it produces a reliable final product, this configuration focuses on developer velocity, making it easy to provide value quickly without introducing unnecessary technical overhead.




## What's included?

- [Slim v4](https://www.slimframework.com/) (w/ [Slim PSR-7](https://github.com/slimphp/Slim-Psr7))

- Blade templating - [BladeOne](https://github.com/eftec/bladeone)

- View rendering helpers - [Slime Render](https://github.com/jyoungblood/slime-render)

- Helpful Vanilla PHP abstraction libraries:
  - Database handlers - [DB Kit](https://github.com/jyoungblood/dbkit)
  - Cookie handlers - [Cookie](https://github.com/jyoungblood/cookie)
  - Simple HTTP client - [HTTP Request](https://github.com/jyoungblood/http-request) 
  - Misc utility functions - [X-Utilities](https://github.com/jyoungblood/x-utilities)
    
- TailwindCSS - [TailwindCSS](https://tailwindcss.com/)
- AlpineJS - [AlpineJS](https://alpinejs.dev/)
    
- Simple organization - folders for css, js, images, templates, and controllers

- Blank CSS and JS placeholder files

- [.env](https://github.com/jyoungblood/stereo/blob/master/.env.example) - helpful basic variables and settings, pre-wired with [phpdotenv](https://github.com/vlucas/phpdotenv)

- [index.php](https://github.com/jyoungblood/stereo/blob/master/index.php) - initialized Slim application w/ middleware, db connection, and default 404 configuration

- [.htaccess](https://github.com/jyoungblood/stereo/blob/master/.htaccess) - routes all non-file urls to index, forces https, and uses gzip for static assets (if available)

- [.gitignore](https://github.com/jyoungblood/stereo/blob/master/.gitignore) - ignores `/vendor`, `.env`, `.vscode`, `error_log`, and `.DS_Store`






## Requirements
- Apache
- PHP >= 7.4
- PDO-compatible database (if using [DB handlers](https://github.com/jyoungblood/dbkit))





## Installation
Easy install with composer:
```
composer create-project jyoungblood/stereo new-project-name
```

Initialize the .env file, using the boilerplate example:
```
mv .env.example .env
```




## Usage
STEREO will work locally with PHP's built-in server:
```
php -S localhost:8080
```

which is also conveniently aliased with a composer script:
```
composer start
```

Alternatively, you could use [Herd](https://herd.laravel.com/), which is an excellent tool for local development.


See [controllers/index.php](https://github.com/jyoungblood/stereo/blob/master/controllers/index.php) for an example of routing and template rendering.



Helpful resources:
- [BladeOne Manual](https://github.com/EFTEC/BladeOne/wiki/BladeOne-Manual)
- [Slim v4 Routing](https://www.slimframework.com/docs/v4/objects/routing.html)
- [DB Kit CRUD operations](https://github.com/jyoungblood/dbkit)
- [TailwindCSS Docs](https://tailwindcss.com/docs)
- [AlpineJS Docs](https://alpinejs.dev/docs/introduction)



