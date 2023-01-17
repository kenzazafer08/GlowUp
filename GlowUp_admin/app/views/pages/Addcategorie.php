<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/sidebar.php'; ?>
<div class="bg-white w-full h-full overflow-auto flex flex-col items-center justify-around">
    <h1 class="m-10 font-extrabold font-serif text-3xl text-gray-900">Add Categorie</h1>
   <form class=" w-[90%] h-full">
<label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
<input type="email" id="email" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-500 focus:border-pink-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="categorie...">

<label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Discription</label>
<textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-pink-500 focus:border-pink-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="..."></textarea>

<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Image</label>
<input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
<button type="button" class="my-8 py-2.5 px-5 mr-2 mb-2 text-sm font-medium focus:outline-none bg-pink-900 rounded-lg border text-white border-gray-200 hover:bg-gray-100  focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Done</button>
</form> 
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>