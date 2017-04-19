<?php

$app->get('/','HomeController:index');
$app->get('/detail/{id}','HomeController:detail');
$app->get('/salario/{minimo}/{maximo}','HomeController:salary');