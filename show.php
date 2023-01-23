<?php
     require_once "vendor/autoload.php";
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
          <div class="w-1/3 mx-auto bg-gray-200 mt-8 rounded-xl text-gray-600">
               <ul>
                    <li class="flex flxe-row justify-center">
                         <h1 class="text-3xl"><?php echo $student->name; ?></h1>
                    </li>
                    <li class="flex flxe-row justify-between">
                         <span >Email </span>
                         <span class=" w-2/3">: <?php echo $student->email ?></span>
                    </li>
                    <li class="flex flxe-row justify-between">
                         <span >Date of Birth </span>
                         <span class=" w-2/3">: <?php echo $student->dob ?></span>
                    </li>
                    <li class="flex flxe-row justify-between">
                         <span >Class </span>
                         <span class=" w-2/3">: <?php echo $student->class ?></span>
                    </li>
                    <li class="flex flxe-row justify-between">
                         <span >Address </span>
                         <span class=" w-2/3">: <?php echo $student->address ?></span>
                    </li>
                    <li style="border-bottom: none;">
                         <a href="index.php" class="cursor-pointer  px-3  m-2 ml-0 font-bold text-white bg-gray-500 rounded right-4 top-10 hover:bg-gray-700 text-lg">back</a>
                         <a href="edit.php?id=<?php echo $student->id ?>" class="cursor-pointer  px-3  m-2 ml-1 font-bold text-white bg-green-400 rounded right-4 top-10 hover:bg-green-500 text-lg">edit</a>
                         <a href="delete.php?id=<?php echo $student->id ?>" class="cursor-pointer  px-3   m-2 ml-1 font-bold text-white bg-red-500 rounded right-4 top-10 hover:bg-red-600 text-lg">delete</a>
                    </li>
               </ul>
          </div>
     </div>
</body>
</html>