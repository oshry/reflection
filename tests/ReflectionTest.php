<?php
/**
 * Created by PhpStorm.
 * User: oshry
 * Date: 4/27/15
 * Time: 3:41 PM
 */
namespace Oshry;

class ReflectionTest extends \PHPUnit_Framework_TestCase {
    function testItCanReflect() {
        $editor = new Test2('John Doe');
        $tuts = new Test1();
        $tuts->publishNextArticle($editor);
    }
}
