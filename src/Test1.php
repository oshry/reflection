<?php
/**
 * Created by PhpStorm.
 * User: oshry
 * Date: 4/27/15
 * Time: 2:28 PM
 */
namespace Oshry;

class test1 {
    public function test1f1(){
        return true;
    }
    public function test1f2(){
        return true;
    }
    function publishNextArticle($editor) {
        $editor->setNextArticle('135523');
        $editor->publish();
    }
}