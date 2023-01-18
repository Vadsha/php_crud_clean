<?php

     require_once "controller.php";
     $data = new Student();
     $data->delete($_GET['id']);

?>