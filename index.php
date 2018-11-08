<?php
  require_once __DIR__.'/vendor/autoload.php';
  require_once __DIR__.'/init.php';

  $app = new Bramus\Router\Router();

  $app->get('/', function(){
    View::desktop('landing');
  });

  $app->get('/login', function(){
    View::desktop('login');
  });

  $app->get('/register', function(){
    View::desktop('register');
  });

  $app->get('/m', function(){
    View::mobile('index');
  });

  $app->post('/register', 'Package\Controller\UserController@register');
  $app->post('/login', 'Package\Controller\UserController@login');

  $app->run();
?>
