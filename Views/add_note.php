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
        <form action="" method="post" class="w-10/12">
            <input type="text" name="search" placeholder="search" class="w-full px-4 py-2 text-base text-gray-600 bg-gray-200 rounded-sm outline-0">
        </form>
        <button class="px-6 text-sm font-semibold text-white rounded-full bg-emerald-500 hover:bg-emerald-600 "><a href="Home.html">Home</a></button>
        <img src="images/welcome.jpg" alt="" srcset="" class="h-10 rounded-full cursor-pointer">
        <a href="logout.html"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-9"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" /></svg></a>
    </header>
    <section class="relative text-gray-600 body-font">
      <div class="container px-5 py-12 mx-auto">
        <div class="flex flex-col w-full mb-6 text-center">
          <h1 class="mb-2 text-2xl font-medium text-gray-900 sm:text-3xl title-font">Add Note</h1>
          <p class="mx-auto text-base leading-relaxed lg:w-2/3">Enhance your experience by adding a personal note, and unlock the complete feature set of Quick Note.</p>
        </div>
        <div class="mx-auto lg:w-1/2 md:w-2/3">
            <form method="post" class="flex flex-wrap -m-2">
              <div class="w-1/2 p-2">
                  <label for="category" class="text-sm font-semibold leading-7 text-gray-600">Category</label>
                  <input type="text" id="category" name="category" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-emerald-500 focus:bg-white focus:ring-2 focus:ring-indigo-200" required>
              </div>
              <div class="w-1/2 p-2">
                  <label for="date" class="text-sm font-semibold leading-7 text-gray-600">Date</label>
                  <input type="date" id="date" name="date" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-emerald-500 focus:bg-white focus:ring-2 focus:ring-indigo-200" required>
              </div>
              <div class="w-full p-2">
                <label for="title" class="text-sm font-semibold leading-7 text-gray-600">Title</label>
                <input type="text" id="title" name="title" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-emerald-500 focus:bg-white focus:ring-2 focus:ring-indigo-200" required>
                  <label for="content" class="text-sm font-semibold leading-7 text-gray-600">content</label>
                  <textarea id="content" name="content" class="w-full h-32 px-3 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none resize-none focus:border-emerald-500 focus:bg-white focus:ring-2 focus:ring-indigo-200" required></textarea>
              </div>
              <div class="w-full p-2">
                <button class="flex px-8 py-2 mx-auto text-lg text-white border-0 rounded bg-emerald-500 focus:outline-none hover:bg-emerald-600">Button</button>
              </div>
            </form>
         </div>
      </div>
    </section>
</body>
</html>
