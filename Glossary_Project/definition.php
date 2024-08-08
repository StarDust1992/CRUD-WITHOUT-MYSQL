<?php 
require("controller/app.php");

if (!isset($_GET["definition"])) {
    redirect("index.php");
    die();  
}

$data = Data::get_def($_GET["definition"]);

if (!isset($data)){
    view("notfound","");
    die();
}

$def = $data->definition;

$view_bag = ["title" => " Details Of  $def "];

view("definition", $data);
