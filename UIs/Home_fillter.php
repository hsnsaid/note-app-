<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>
<body class="bg-gray-200">
    <header class="flex w-full gap-5 py-3 bg-white shadow-lg px-28">
        <form method="post" class="w-10/12">
            <input type="text" name="search" placeholder="search" class="w-full px-4 py-2 text-base text-gray-600 bg-gray-200 rounded-sm outline-0">
        </form>
        <button class="px-6 text-sm font-semibold text-white rounded-full bg-emerald-500 hover:bg-emerald-600 ">+<a href="add_note.html" class="ml-1">Add</a></button>
        <img src="images/welcome.jpg" alt="" srcset="" class="h-10 rounded-full cursor-pointer">
    </header>
    <main class="container py-6 px-28">
        <h3 class="mb-2 text-2xl font-semibold text-gray-800">Your notes</h3>
        <div class="container flex flex-col flex-wrap ">
            <div class="flex flex-wrap">
                <a href="Home.html" class="inline-flex items-center justify-center w-1/2 py-3 font-medium leading-none tracking-wider border-b-2 border-gray-200 cursor-pointer sm:px-6 sm:w-auto sm:justify-start title-font hover:text-emerald-500">
                ALL
                </a>
                <?php foreach($category as $nav){ if($nav["category"]==$_GET["category"]){?>              
                <a href="Home_fillter.html?category=<?php echo $nav["category"]?>"  class="inline-flex items-center justify-center w-1/2 text-sm font-medium leading-none tracking-wider border-b-2 rounded-t cursor-pointer text-emerald-500 border-emerald-500 sm:px-6 sm:w-auto sm:justify-start">
                <?php echo ($nav["category"])?>
                </a>
                <?php } else{?>
                <a href="Home_fillter.html?category=<?php echo $nav["category"]?>"  class="inline-flex items-center justify-center w-1/2 py-3 font-medium leading-none tracking-wider border-b-2 border-gray-200 cursor-pointer sm:px-6 sm:w-auto sm:justify-start title-font hover:text-emerald-500">
                <?php echo ($nav["category"]) ?>
                </a>
                <?php }}?>
            </div>
        </div>
        <section class="text-gray-600 body-font">
            <div class="container px-5 pt-5 mx-auto">
              <div class="flex flex-wrap -m-4">
                <?php foreach($data as $row){ if ($row["category"]==$_GET["category"]){?>
                <div class="p-4 xl:w-1/3 md:w-1/2">
                    <div class="p-6 bg-white border border-gray-200 rounded-lg shadow">
                      <div class="inline-flex items-center justify-center h-10 px-3 mb-4 text-green-500 bg-green-100 rounded-full">
                          <p><?php echo $row["category"]?></p>
                      </div>
                      <h2 class="mb-2 text-lg font-medium text-gray-900 title-font"><?php echo $row["date"]?></h2>
                      <p class="text-base leading-relaxed"><?php echo $row["content"]?></p>
                    </div>
                </div>
                <?php }}?>
              </div>
            </div>
        </section>
    </main>
</body>
</html>
