<?php
/**
 * Created by PhpStorm.
 * User: oshry
 * Date: 4/27/15
 * Time: 2:27 PM
 */
require './vendor/autoload.php';

$editor = new Oshry\Test2('John Doe');
$nettuts = new Oshry\Test1();
$nettuts->publishNextArticle($editor);

//Class Name
var_dump(new ReflectionClass($editor));

//Class Method
$reflector = new ReflectionClass($editor);
var_dump($reflector->getMethods());


die('Here');