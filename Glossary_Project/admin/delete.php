<?php 
session_start();
require_once("../controller/app.php");
ensure_user_is_authenticated();

if (is_get()){
    $key = sanitize($_GET['key']);
    if(empty($key)){
        view('notfound');
      die();
     }

       $term = Data::get_term($key);
       if($term === false){
        view('notfound') ; 
        die();
       }
       view('admin/delete',$term);
}


if (is_post()) {
    if (isset($_POST['term'])) {
        $term = sanitize($_POST['term']);
        Data::delete_term($term);
        redirect('index.php');
    } else {
        // Handle the case when the "term" key is not present in the $_POST array
        echo "Term not provided";
    }
} 
