<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>
<body class="bg-gray-200">
    <header class="flex w-full gap-5 py-3 bg-white shadow-lg px-28 ">
        <form method="post" class="w-10/12">
            <input type="text" name="search" placeholder="search" class="w-full px-4 py-2 text-base text-gray-600 bg-gray-200 rounded-sm outline-0">
        </form>
        <button class="px-6 text-sm font-semibold text-white rounded-full bg-emerald-500 hover:bg-emerald-600 ">+<a href="add_note.html" class="ml-1">Add</a></button>
        <img src="images/welcome.jpg" alt="" srcset="" class="h-10 rounded-full cursor-pointer">
        <a href="logout.html"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-9"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" /></svg></a>
    </header>
    <main class="container py-6 px-28">
        <h3 class="mb-2 text-2xl font-semibold text-gray-800">Your notes</h3>
        <div class="container flex flex-col flex-wrap ">
            <div class="flex flex-wrap">
              <a href="" class="inline-flex items-center justify-center w-1/2 text-sm font-medium leading-none tracking-wider border-b-2 rounded-t cursor-pointer text-emerald-500 border-emerald-500 sm:px-6 sm:w-auto sm:justify-start">
                ALL
              </a>
              <?php foreach($category as $nav){?>              
              <a href="Home_fillter.html?category=<?php echo $nav["category"]?>" class="inline-flex items-center justify-center w-1/2 py-3 font-medium leading-none tracking-wider border-b-2 border-gray-200 cursor-pointer sm:px-6 sm:w-auto sm:justify-start title-font hover:text-emerald-500">
                <?php echo ($nav["category"]) ?>
              </a>
              <?php }?>
            </div>
        </div>
        <section class="text-gray-600 body-font">
            <div class="container px-5 pt-5 mx-auto">
              <div class="flex flex-wrap -m-4">
                <?php foreach($data as $row){?>
                <div class="p-4 xl:w-1/3 md:w-1/2">
                    <div class="p-6 bg-white border border-gray-200 rounded-lg shadow">
                      <div class="flex justify-between w-full">
                        <div class="inline-flex items-center justify-center h-10 px-3 mb-2 text-green-500 bg-green-100 rounded-full">
                            <p><?php echo $row["category"]?></p>
                        </div>
                        <div class="flex gap-5">
                          <?php if($row['status']=="not_completed"){?>
                          <a href="upadate.html?id=<?php echo $row['id']?>&status=<?php echo $row['status']?>" class="mt-2 cursor-pointer">                                
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z" /></svg>
                          </a>
                          <?php } else{?>
                          <a href="upadate.html?id=<?php echo $row['id']?>&status=<?php echo $row['status']?>" class="mt-2 cursor-pointer">                                
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                          </a>
                          <?php }?>
                          <a href="delete.html?id=<?php echo $row['id']?>" class="mt-2 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" /></svg>
                          </a>
                        </div>
                      </div>
                      <h2 class="mb-2 text-lg font-medium text-gray-900 title-font"><?php echo $row["title"]?></h2>
                      <p class="text-base leading-relaxed"><?php echo $row["content"]?></p>
                      <p class="mt-1 text-sm leading-relaxed text-right"><?php echo $row["date"]?></p>
                    </div>
                </div>
                <?php }?>
              </div>
            </div>
          </section>
    </main>
</body>
</html>