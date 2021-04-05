<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Web portofolio tailwind">
    <meta name="keyword" content="tailwindcss, CSS, tailwind">
    <style>
        table {
          width:100%;
        }
        table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
        }
        th, td {
          padding: 15px;
          text-align: left;
        }
        #t01 tr:nth-child(even) {
          background-color: #eee;
        }
        #t01 tr:nth-child(odd) {
         background-color: #fff;
        }
        #t01 th {
          background-color: black;
          color: white;
        }
        </style>
</head>
<body>
    <section class="w-screen mx-auto px-4"> 
        <nav class="flex flex-wrap p-6 justify-between">
           <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
               <a href="#logout" class="inline-block text-sm px-4 py-2 rounded text-gray-600 border border-gray-600 hover:border-transparent hover:text-white hover:bg-indigo-700 mt-4 lg:mt-0">
               Logout
               </a>
           </div>
       </nav>
   </section>
    <section id="recent" class="w-screen mx-auto py-4 bg-gray-300">
        <div class="text-center mb-8">
            <h1 class="w-full my-2 text-5xl font-bold text-gray-700">Hasil Survey</h1>
               <div class="mb-4">
                  <div class="h-1 mx-auto bg-pink-500  w-2/3 md:w-1/4 opacity-75 my-0 py-0 rounded">
                   </div>
                </div>
            <p class="text-lg m-4 text-gray-600">Berikut adalah Hasil Survey Dota : </p>
         </div>
         <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-1 m-8">
            <table id="t01">
                <tr>
                  <th>Firstname</th>
                  <th>Lastname</th> 
                  <th>Age</th>
                </tr>
                <tr>
                  <td>Jill</td>
                  <td>Smith</td>
                  <td>50</td>
                </tr>
                <tr>
                  <td>Eve</td>
                  <td>Jackson</td>
                  <td>94</td>
                </tr>
                <tr>
                  <td>John</td>
                  <td>Doe</td>
                  <td>80</td>
                </tr>
              </table>
        </div>
    </section>
</body>
</html>