<?php

function d($var){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

function dd($var){
   d($var);
   die();
}
// d($_SERVER['DOCUMENT_ROOT']);
//$webroot="http://limitless-templeting.test".DIRECTORY_SEPARATOR ;
$docroot = $_SERVER['DOCUMENT_ROOT'].'/limitless-full-theme-master';
$partials = $docroot.'/partials'.'/';