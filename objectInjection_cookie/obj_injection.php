<?php

/**
 * Object Injection via Cookie
 */
class Foo{
	public $cmd;
    function __construct() {
    }
    function __destruct(){
        eval($this->cmd);
    }
}

?>