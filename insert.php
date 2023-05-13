<?php

include 'student.php';

// var_dump($_POST);

if($handler->insert($_POST)) {
    header("location: index.php");
} 

?>