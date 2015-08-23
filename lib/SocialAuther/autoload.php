<?php

spl_autoload_register('autoload');

function autoload($class)
{
    if (strpos($class, 'SocialAuther') !== FALSE) {
        require_once str_replace('SocialAuther/', '', str_replace('\\', '/', $class) . '.php');
    }
}
