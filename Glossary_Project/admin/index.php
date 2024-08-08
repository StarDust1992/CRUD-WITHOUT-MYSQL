<?php

session_start();
require("../controller/app.php");

ensure_user_is_authenticated();


view("admin/index", Data::get_terms());

// Call get_terms() and pass the returned data to the view() function

?>

<!-- Bootstrap CSS link (optional) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">