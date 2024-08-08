<?php 
require("controller/app.php");

if (!isset($_GET["term"])){
    redirect("index.php");
    die();  
}

$data = Data::get_term($_GET["term"]);
$new_str = preg_replace("/[+]/", "+/",(array)$data);    

if($new_str === false){
    view("notfound", ""); // Redirect to notfound view
    die();
};

if (!property_exists((object)$new_str, 'term')) {
    echo "NOT FOUND!";
    die();
}

$term = $data->term  ; // Use null coalescing operator to handle missing property

if ($term !== null) {
    echo $term;
    die();
}


$view_bag = ["title" => " Detail For $term "] ;

view("detail", $data);

