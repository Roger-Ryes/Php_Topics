<?php

//Uso de autoload
function autocarga($className){
    include 'controllers/'.$className.'.php';
}

spl_autoload_register('autocarga');
