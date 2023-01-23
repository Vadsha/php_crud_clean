<?php

     require_once "vendor/autoload.php";

     use Utils\DB as UtilDb;

     $data = new UtilDb();
     $students = $data->index();

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Students</title>
     <script src="https://cdn.tailwindcss.com"></script>
     <style>
          th , td {
               padding: 8px 18px;
               text-align: left;
               font-size: 1.1rem;
          }

     </style>
</head>
<body>
     <div class="w-screen">
          <table class="table bg-gray-200 w-2/3 mx-auto mt-8 rounded-xl text-gray-600">
               <tr class="mx-2">
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>CLASS</th>
                    <th class="text-lg text-green-500">
                         <a href="create.php" class="ml-3.5 hover:text-gray-400 hover:text-white hover:bg-green-400 rounded px-1">CREATE</a>
                    </th>
               </tr>
               <?php foreach($students as $student) : ?>
               <tr class="hover:bg-gray-300">
                    <td><?php echo $student->id; ?>.</td>
                    <td><?php echo $student->name; ?></td>
                    <td><?php echo $student->email; ?></td>
                    <td><?php echo $student->class; ?></td>
                    <td>
                         <a href="show.php?id=<?php echo $student->id; ?>" class="cursor-pointer  px-3  m-2 ml-4 font-bold text-white bg-gray-400 rounded right-4 top-10 hover:bg-gray-700">show</a>
                    </td>
               </tr>
               <?php endforeach; ?>
          </table>
     </div>
</body>
</html>