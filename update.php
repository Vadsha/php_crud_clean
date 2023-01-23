<?php

require_once "vendor/autoload.php";
$data = new Student();
     $student = $data->update($_GET['id'] , $_POST);

?>