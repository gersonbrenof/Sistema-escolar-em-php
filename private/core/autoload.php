<?php 
require "config.php";
require "database.php";
require "controller.php";
require "model.php";
require "app.php";

 spl_autoload_register(function ($class_nome){
    require "../private/models/". ucfirst($class_nome) . ".php";
 });
;?>