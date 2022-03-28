<?php

function auto_load($class){
    require_once 'clases/'.$class.'.php';   
}

spl_autoload_register('auto_load');

