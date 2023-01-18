<?php
     require_once "controller.php";

     $data = new Student();
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
          <table class="table bg-gray-200 w-1/2 mx-auto mt-8">
               <tr class="mx-2">
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>CLASS</th>
                    <th class="text-lg text-blue-400">
                         <a href="create.php" class="ml-4">CREATE</a>
                    </th>
               </tr>
               <?php foreach($students as $student) : ?>
               <tr>
                    <td><?php echo $student->id; ?>.</td>
                    <td><?php echo $student->name; ?></td>
                    <td><?php echo $student->email; ?></td>
                    <td><?php echo $student->class; ?></td>
                    <td>
                         <a href="show.php?id=<?php echo $student->id; ?>" class="cursor-pointer  px-3  m-2 ml-4 font-bold text-white bg-gray-500 rounded right-4 top-10 hover:bg-gray-700">show</a>
                    </td>
               </tr>
               <?php endforeach; ?>
          </table>
     </div>
</body>
</html>