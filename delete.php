<?php

     require_once "vendor/autoload.php";
     $data = new Student();
     $data->delete($_GET['id']);

?>