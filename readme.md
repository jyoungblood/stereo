# STEREO

### A pragmatic toolkit for internet makers

- Documentation: [https://stereotk.com/](https://stereotk.com/)


STEREO is a "full stack" tool kit designed to make the process of developing dynamic server-rendered web applications significantly easier and more enjoyable.

While it produces a reliable final product, this configuration focuses on developer velocity, making it easy to provide value quickly without introducing unnecessary technical overhead.




## What's included?

- [Slim v4](https://www.slimframework.com/) (w/ [Slim PSR-7](https://github.com/slimphp/Slim-Psr7))

- Blade templating - [BladeOne](https://github.com/eftec/bladeone)

- View rendering helpers - [Stereo Render](https://github.com/jyoungblood/stereo-render)

- Helpful Vanilla PHP abstraction libraries:
  - Database handlers - [DB Kit](https://github.com/jyoungblood/dbkit)
  - Cookie handlers - [Cookie](https://github.com/jyoungblood/cookie)
  - Simple HTTP client - [HTTP Request](https://github.com/jyoungblood/http-request) 
  - Misc utility functions - [X-Utilities](https://github.com/jyoungblood/x-utilities)
    
- [TailwindCSS](https://tailwindcss.com/)

- [AlpineJS](https://alpinejs.dev/)

- [Instant.page](https://instant.page/)
    
- Simple application skeleton






## Requirements
- PHP >= 7.4
- PDO-compatible database (if using [DB handlers](https://github.com/jyoungblood/dbkit))
- Apache





## Installation
Easy install with composer:
```
composer create-project jyoungblood/stereo new-project-name
```

In the new project directory, initialize the .env file and template cache directory:
```
cd new-project-name
mv .env.example .env
mkdir public/cache
```

(optional) Install Tailwind:
```
npm install
```




## Local Development
STEREO will work locally with a variety of methods, the simplest being PHP's built-in web server:
```
php -S localhost:6969 -t public/
```

There is also conveniently aliased composer script:
```
composer start
```

If you're using Tailwind, the watcher script and PHP server can be run concurrently with a single command:
```
npm run dev
```

You could also use [Herd](https://herd.laravel.com/), which is an excellent tool for local development.



Additional resources:
- [STEREO Docs](https://stereotk.com/docs)
- [BladeOne Manual](https://github.com/EFTEC/BladeOne/wiki/BladeOne-Manual)
- [Slim v4 Routing](https://www.slimframework.com/docs/v4/objects/routing.html)
- [DB Kit CRUD operations](https://github.com/jyoungblood/dbkit)
- [TailwindCSS Docs](https://tailwindcss.com/docs)
- [AlpineJS Docs](https://alpinejs.dev/docs/introduction)



This project is a perpetual work in progress. [Get in touch](mailto:jonathan.youngblood@gmail.com) if you'd like to get involved.
