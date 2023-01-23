<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/sidebar.php'; ?>
<div class="bg-white w-full h-full overflow-auto flex flex-col items-center justify-around">
    <h1 class="mr-4 mt-4 font-extrabold font-serif text-3xl text-gray-900">Edit Categorie</h1>
    <?php echo '<span class="text-green-600 font-bold text-lg text-center">'.$data['add'].'</span>' ?>
   <form class=" w-[90%] h-full" action='<?= URLROOT?>/dashboard/editcat/<?=$data['id']?>' method='POST'>
<label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
<input type="text" value = "<?=$data['name']?>" name="name" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-500 focus:border-pink-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="categorie...">
<?php echo '<span class="text-red-600 font-bold text-lg text-center">'.$data['name_err'].'</span>' ?>
<label for="discription" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Discription</label>
<textarea name="discription" value = "" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-pink-500 focus:border-pink-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="..."><?=$data['discription']?></textarea>
<?php echo '<span class="text-red-600 font-bold text-lg text-center">'.$data['discription_err'].'</span>' ?>
<label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
<input type="text" name="image" value = "<?=$data['image']?>" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-500 focus:border-pink-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="Image url...">
<?php echo '<span class="text-red-600 font-bold text-lg text-center">'.$data['image_err'].'</span>' ?>
<button type="submit" class="my-8 py-2.5 px-5 mr-2 mb-2 text-sm font-medium focus:outline-none bg-pink-900 rounded-lg border text-white border-gray-200 hover:bg-gray-100  focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Done</button>
</form> 
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>