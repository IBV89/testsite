<?php

function __autoload($ClassName){
    require __DIR__ . '/classes/' .
        str_replace('\\', '/',$ClassName) .
        '.php';
}