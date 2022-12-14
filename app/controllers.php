<?php

foreach(glob(__DIR__.'/Controllers/*.php') as $controller) {
    if(is_file($controller)){
        require_once $controller;
    }
}
