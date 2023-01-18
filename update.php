<?php

     require_once "controller.php";
     $data = new Student();
     $student = $data->update($_GET['id'] , $_POST);

?>