<?php

function __autoload($ClassName){
    require __DIR__ . '/classes/' . $ClassName . '.php';
}