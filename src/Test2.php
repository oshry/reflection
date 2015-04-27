<?php
/**
 * Created by PhpStorm.
 * User: oshry
 * Date: 4/27/15
 * Time: 2:29 PM
 */
namespace Oshry;

class test2 {
    private $name;
    public $articleId;

    function __construct($name) {
        $this->name = $name;
    }

    public function setNextArticle($articleId) {
        $this->articleId = $articleId;
    }

    public function publish() {
        // publish logic goes here
        return true;
    }

}