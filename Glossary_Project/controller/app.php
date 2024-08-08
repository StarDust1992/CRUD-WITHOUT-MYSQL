<?php

define("APP_NAME" ,  dirname(__FILE__)."/../") ;
require("functions/routing_functions.php");
require("functions/config.php");
require("functions/data.class.php");
require("functions/filedataprovider.class.php");


Data::initialize(new FileDataProvider(CONFIG['data_file']));