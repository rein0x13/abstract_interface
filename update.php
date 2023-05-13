<?php

include 'student.php';

if($handler->update($_POST)) {
    header("location: index.php");
}

?>