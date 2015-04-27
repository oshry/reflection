Reflection Case Study
=====================

reflection is asking an object to tell you about its properties and methods, 
and altering those members (even private ones).

Example:

$editor = new Oshry\Test2('John Doe');
$nettuts = new Oshry\Test1();
$nettuts->publishNextArticle($editor);

To Get Class Name Use:
var_dump(new ReflectionClass($editor));

To Get Class Methods Use:
$reflector = new ReflectionClass($editor);
var_dump($reflector->getMethods());


ref: http://code.tutsplus.com/tutorials/reflection-in-php--net-31408

#Tests
 - Run Tests: tests/: ../vendor/bin/phpunit ReflectionTest.php