<?php 


function view($name,$model=""){
    global $title,$view_bag,$items ;
    require(APP_NAME ."location:../../view/layout.view.php");
}

function redirect($url){
    header("location:$url");
}

function is_post() {
    return $_SERVER["REQUEST_METHOD"] === "POST";
}

function is_get(){
    return $_SERVER["REQUEST_METHOD"] === "GET";
}

function is_user_authenticated(){
    return isset($_SESSION['email']);
}

function ensure_user_is_authenticated()
{
    if (!is_user_authenticated()) {
       redirect('../login.php'); // Redirect to the admin page if the user is authenticated
    } 
}
function ensure_user_is_admin(){
 if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
  redirect('login.php');
 }
}

function authenticate_user($email, $password)
{
    $users = CONFIG['users'];
    
    if(!isset($users[$email]) || $users[$email] === false){
   
     echo "<h1>The provided cridential didnt work.</h1>" ;
    
     }
    else{
      
        return $password == $users[$email];
    }
    
}

 function sanitize($value) {
    $term = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
    if ($term === false) {
        return "";
    }
    return $term;
}
