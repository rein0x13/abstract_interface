<?php

include 'student.php';

if($handler->delete($_POST['id'])) {
    header("location: index.php");
}

?>