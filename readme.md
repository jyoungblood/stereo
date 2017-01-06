```
  ______     ______    ______     ______     ______     ______
 /\  ___\   /\__  _\  /\  ___\   /\  == \   /\  ___\   /\  __ \
 \ \___  \  \/_/\ \/  \ \  __\   \ \  __<   \ \  __\   \ \ \/\ \
  \/\_____\    \ \_\   \ \_____\  \ \_\ \_\  \ \_____\  \ \_____\
   \/_____/     \/_/    \/_____/   \/_/ /_/   \/_____/   \/_____/

 Internet Tool Kit v1.1.1

```

### Literally the easiest way to make web sites with PHP



### FEATURES
- [Easy & flexible router](http://altorouter.com/) with pretty urls
- [Handlebars](http://handlebarsjs.com/) templates
- Simple/intuitive application structure
- Convenient MYSQL CRUD functionality
- Helpful utility functions *(for working with cookies, http requests, sending email, etc)*
- Sensible *(but minimal)* front-end boilerplate
- Works with most shared web hosting providers  



### Just look how easy it is to make all of these responses:

Render a normal Handlebars template

```
$app->get('/handlebars-normal', function(){
  echo $GLOBALS['engine']->render('handlebars-example', array(
    'righteous_content' => 'for_sure'
  ));
});
```


Render a Handlebars template (w/ special STEREO helpers)

```
$app->get('/handlebars-stereo', function(){
  $GLOBALS['app']->render_template(array(
    'template' => 'planets',
    'title' => 'Cool Planets',
    'layout' => false,
    'data' => array(
      'righteous_content' => 'for_sure',
      'planets' => array(
        'Mercury', 'Venus', 'Earth', 'Nibiru'
      )
    )
  ));
});
```


Show a normal PHP / HTML document

```
$app->get('/normal-page', function(){
  require __DIR__ . '/pages/whatever.html';
});
```


Send an array as JSON for handy API responses

```
$app->post('/json-response', function(){
  $GLOBALS['app']->render_json(array(
    'righteous_content' => 'for sure'
  ));
});
```


Set headers, do redirects

```
$app->get('/whatever', function(){
  header("Location: http://partyphysics.com/");
});
```


or execute any PHP code...do literally whatever you want!





### Read the full documentation: [http://stereotk.com/docs](http://stereotk.com/docs)

