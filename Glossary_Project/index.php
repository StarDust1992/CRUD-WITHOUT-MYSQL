<?php

require("controller/app.php");
$title = "PHP FUNDAMENTALS:" ;
$view_bag =[
    "title"=> "Glossary",
    "heading"=> "Home Page"
] ;

if (isset($_GET["search"])){
  
    $items = Data::search_terms($_GET["search"]) ;
    $view_bag["heading"] = "search result for:".$_GET["search"] ;

}else{
    $items = Data::get_terms();
}
    
view("index",$items);

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
