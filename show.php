<?php
     require_once "controller.php";
     $data = new Student();
     $student = $data->show($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title><?php echo $student->name ?></title>
     <script src="https://cdn.tailwindcss.com"></script>
     <style>
          li{
               padding: 10px;
               border-bottom: 1px solid gray;
               margin: 0px 10px;
               display: flex;
               font-size: 1.3rem;
          }
     </style>
</head>
<body>
     <div class="container">
          <div class="w-1/3 mx-auto bg-gray-200 mt-8">
               <ul>
                    <li>Name : <?php echo $student->name ?></li>
                    <li>Email : <?php echo $student->email ?></li>
                    <li>Date of Birth : 
                         <span><?php echo $student->dob ?></span>
                    </li>
                    <li>Class : <?php echo $student->class ?></li>
                    <li>Address : <?php echo $student->address ?></li>
                    <li>
                         <a href="index.php" class="cursor-pointer  px-3  m-2 ml-0 font-bold text-white bg-gray-500 rounded right-4 top-10 hover:bg-gray-700 text-lg">back</a>
                         <a href="edit.php?id=<?php echo $student->id ?>" class="cursor-pointer  px-3  m-2 ml-4 font-bold text-white bg-green-400 rounded right-4 top-10 hover:bg-gray-700 text-lg">edit</a>
                         <a href="delete.php?id=<?php echo $student->id ?>" class="cursor-pointer  px-3   m-2 ml-4 font-bold text-white bg-red-500 rounded right-4 top-10 hover:bg-gray-700 text-lg">delete</a>
                    </li>
               </ul>
          </div>
     </div>
</body>
</html>