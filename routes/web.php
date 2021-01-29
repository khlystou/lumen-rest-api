<?php

$router->get('/info', 'InfoController@index');
$router->post('/info', 'InfoController@store');