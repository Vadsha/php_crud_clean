<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>create student</title>
     <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
     <div class="w-full mt-8 flex justify-center">
          <form action="store.php" method="POST" class="bg-gray-200 w-1/2 flex flex-col ">
               <h1 class="text-2xl text-center text-blue-500 p-6">Create Student</h1>
               <input type="text" name="name" class="p-2 m-4 border-2 rounded caret-gray-400  focus:outline-none" placeholder="name...">
               <input type="text" name="email" class="p-2 m-4 border-2 rounded caret-gray-400  focus:outline-none" placeholder="email..">
               <input type="date" name="dob" class="p-2 m-4 border-2 rounded caret-gray-400  focus:outline-none">
               <input type="text" name="class" class="p-2 m-4 border-2 rounded caret-gray-400  focus:outline-none" placeholder="class...">
               <input type="text" name="address" class="p-2 m-4 border-2 rounded caret-gray-400  focus:outline-none" placeholder="address...">
               <div class="flex justify-between">
               <a href="index.php"  class="cursor-pointer  px-3 py-1 m-2 ml-6 font-bold text-white bg-gray-500 rounded right-4 top-10 hover:bg-gray-700">back</a>
               <button  class=" px-3 py-1 m-2 mr-6 font-bold text-white bg-gray-500 rounded right-4 top-10 hover:bg-gray-700">create</button>
               </div>


          </form>
     </div>
</body>
