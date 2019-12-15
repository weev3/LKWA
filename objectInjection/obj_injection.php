<?php

/**
 * Blind RCE
 */
class Foo{
    function __construct($filename, $data) {
        $this->filename = $filename . ".txt";
        $this->data = $data;
    }
    function __destruct(){
        file_put_contents($this->filename, $this->data);
    }
}
?>