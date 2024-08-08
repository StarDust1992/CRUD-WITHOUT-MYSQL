<?php 

session_start() ; 
require("../controller/app.php");
ensure_user_is_authenticated();
if (is_get()){
    $key = sanitize($_GET['key']);

     if(empty($key)){
        view('notfound');
        die() ;
     }

       $term = Data::get_term($key);
       if($term === false){
        view('notfound') ; 
        die();
       }
       view('admin/edit',$term);
}

if (is_post()){
    $term = sanitize($_POST["term"]);
    $definition = sanitize($_POST["definition"]);
    $original_term = sanitize($_POST['original_term']);
    if(empty($term) || empty($definition) || empty($original_term)){
        echo "Error Message" ; 
    }else{
        Data::update_term($original_term, $term, $definition);
       redirect("index.php");
    }
   
}

 
 
