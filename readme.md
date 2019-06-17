
![headphones icon](https://stereotk.com/images/stereo-headphones-black-small.png)

# STEREO Internet Tool Kit 
## v1.3.0
##### The easiest way to make web sites with PHP (and friends)

---

## FEATURES
- Easy and flexible routing system with pretty urls 😍
- Powerful [Handlebars](http://handlebarsjs.com/) templates
- Convenient MYSQL CRUD functionality
- Helpful utility functions *(for working with cookies, http requests, email, etc)*
- Sensible *(and minimal)* front-end boilerplate ✨
- Straightforward application structure
- Works with most shared web hosting providers  




## INSTALLATION
STEREO is designed to function with most LAMP stacks, and will support very old systems. Minimum requirements: PHP: 5.3, MYSQL: 3.0, Apache: 2.4.

*\* NGINX is also supported, see docs for configuration*

Easiest installation: [download the latest release](https://gitlab.com/hxgf/stereo/-/archive/1.3.0/stereo-1.3.0.zip) and put the files on your server or dev environment 👍

Next-easiest installation: clone the latest version of the master branch with git:
```
git clone https://gitlab.com/hxgf/stereo.git .
```
...just remember to remove this repo from your actual project:
```
rm -Rf .git
```



## GETTING STARTED
1. Edit your global settings (site title, DB connection): ./settings.php
2. Set up some routes: ./controllers/_routes.php
3. Make some templates: ./pages/index.hbs
4. Build something cool!

### Routing + template example
#### (render a handlebars template with a global base template with data from PHP arrays)

in ./controllers/_routes.php:
```
$app->get('/favorite-planets', function(){

  $planets[] = array(
    'title' => 'Mercury',
    'nickname' => 'Swift Planet'
  );

  $planets[] = array(
    'title' => 'Venus',
    'nickname' => 'The Morning Star'
  );

  $planets[] = array(
    'title' => 'Earth',
    'nickname' => 'Big Blue'
  );

  $planets[] = array(
    'title' => 'Nibiru',
    'nickname' => 'Planet X'
  );

  $GLOBALS['app']->render_template(array(
    'template' => 'planets',
    'title' => 'Cool Planets',
    'data' => array(
      'reader_name' => 'Chad',
      'planets' => $planets
    )
  ));

});
```

in ./pages/planets.hbs:
```
<div class="mw8 center pa5">
  Greetings, {{reader_name}}! Allow me to provide you with a list of my favorite planets:
  <ul>
    {{#each planets}}
    <li>{{title}} ({{nickname}})</li>
    {{/each}}
  </ul>
</div>
```

Can you guess what will be rendered? 
Go here to find out: [https://stereotk.com/favorite-planets](https://stereotk.com/favorite-planets)


### Other responses you can make:

Render a single PHP / HTML document:
```
$app->get('/normal-page', function(){
  require __DIR__ . '/pages/whatever.html';
});
```

Render a PHP array as a JSON response:
```
$app->post('/json-response', function(){

  // do something magic here...crunch some data? web scraping? make some API calls? idk, math??

  $GLOBALS['app']->render_json(array(
    'righteous_content' => 'for sure',
    'planets' => array(
      'Mercury', 'Venus', 'Earth', 'Nibiru'
    )
  ));
});
```

Set headers / do redirects:
```
$app->get('/party', function(){
  header("Location: http://partyphysics.com/");
});
```

...and that's just the beginning! 

STEREO has abstraction tools to help you build all kinds of functionality!

Check out the full documentation to see everything you can do: [https://docs.stereotk.com](https://docs.stereotk.com)



## CONTRIBUTING
Contributions, issues, and feature requests are welcomed and appreciated (although a timely response is not guaranteed). Check the [issues page](https://gitlab.com/hxgf/stereo/issues) if you're interested in helping out 🙌 🙏



## LICENSE
Copyright © 2019 [HXGF](https://hxgf.io).
This project is [MIT](https://gitlab.com/hxgf/stereo/blob/master/stereo/license.md) licensed.

