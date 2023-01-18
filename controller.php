<?php

     class Student
     {
          protected $db;
          public function __construct()
          {

               try{

                    $db = new PDO("mysql: dbhost=localhost; dbname=php_clean" , "root" , "vaddshah2626");

                    $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

                    $this->db = $db;

               }catch(PDOException $e){
                    echo $e->getMessage();
                    echo $e->getLine();
               }catch(Exception $e){
                    echo $e->getMessage();
                    echo $e->getLine();
               }
          }

          public function store($data)
          {
               $db = $this->db;
               $state = $db->prepare("
                    INSERT INTO `students` (`name`,`email`,`dob`,`class`,`address`)
                    VALUES(:name, :email, :dob , :class, :address)
               ");
               $state->bindParam(':name' , $data['name']);
               $state->bindParam(':email' , $data['email']);
               $state->bindParam(':dob' , $data['dob']);
               $state->bindParam(':class' , $data['class']);
               $state->bindParam(':address' , $data['address']);

               if ($state->execute()) {
                    header("Location: http://localhost:8000/index.php");
               }
               else{
                    echo "500 internal server error!";
               }
          }

          public function index()
          {
               $db = $this->db;
               $state = $db->query("SELECT * FROM `students`");
               $students = $state->fetchAll(PDO::FETCH_OBJ);
               return $students;
          }

          public function show($id)
          {
               $db = $this->db;

               $state = $db->prepare("SELECT *  FROM `students` WHERE id = :id");

               $state->bindParam(":id" , $id);

               if ($state->execute()) {
                    $student = $state->fetch(PDO::FETCH_OBJ);
                    return $student;
               }
               else{
                    return "500 Internal server error!";
               }
          }

          public function edit($id)
          {
               return $this->show($id);
          }

          public function update($id , $data)
          {
               $db = $this->db;
               $state = $db->prepare("
                    UPDATE `students`
                    SET name = :name , email = :email , dob = :dob , class = :class , address = :address
                    WHERE `id` = :id
               ");

               $state->bindParam(':id' , $id);
               $state->bindParam(':name' , $data['name']);
               $state->bindParam(':email' , $data['email']);
               $state->bindParam(':dob' , $data['dob']);
               $state->bindParam(':class' , $data['class']);
               $state->bindParam(':address' , $data['address']);
               if ($state->execute()) {
                    header("Location: http://localhost:8000/index.php");
               }
               else{
                    echo "500 internal server error!";
               }
          }

          public function delete($id)
          {
               $db = $this->db;
               $state = $db->prepare("DELETE FROM `students` WHERE `id` = :id");
               $state->bindParam(':id' , $id);
               if ($state->execute()) {
                    header("Location: http://localhost:8000/index.php");
               }
               else{
                    echo "500 internal server error!";
               }
          }
     }

?>