<?php
function debug($smth){
    echo "<pre>";
    print_r($smth);
    echo "</pre>";
}
function requireFile($file, $name = "View"){
    if (is_file($file)){
        require_once $file;
    }
    else throw new \Exception($name.' file does not exist');
}