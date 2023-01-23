<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/sidebar.php'; ?>
<div class="bg-white w-full h-full overflow-auto flex flex-col items-center ">
    <h1 class="mt-4 mr-4 font-extrabold font-serif text-3xl text-gray-900 h-[10%]">Add product</h1>
<?php echo '<span class="text-green-600 font-bold text-lg text-center">'.$data['add'].'</span>' ?>    
  <form class=" w-[90%] " method="post" action="<?= URLROOT?>/dashboard/addproduct">
    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
<input type="text" name="brand" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-500 focus:border-pink-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="brand...">
<?php echo '<span class="text-red-600 font-bold text-lg text-center">'.$data['brand_err'].'</span>' ?>
<label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
<input type="text" name="name" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-500 focus:border-pink-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="product...">
<?php echo '<span class="text-red-600 font-bold text-lg text-center">'.$data['name_err'].'</span>' ?>
<label for="categorie" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categorie</label>
<select name="categorie" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-500 focus:border-pink-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500">
  <option class="text-gray-100" selected >Choose a categorie</option>
  <?php foreach($data['categories'] as $category) :?>
  <option value="<?= $category->id_cat ?>"><?= $category->name_cat; ?></option>
  <?php endforeach;?>
</select>
<?php echo '<span class="text-red-600 font-bold text-lg text-center">'.$data['categorie_err'].'</span>' ?>
<label for="discription" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Discription</label>
<textarea name="discription" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-pink-500 focus:border-pink-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="..."></textarea>
<?php echo '<span class="text-red-600 font-bold text-lg text-center">'.$data['discription_err'].'</span>' ?>
<label for="hwoto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">How to use</label>
<textarea name="howto" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-pink-500 focus:border-pink-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="..."></textarea>
<?php echo '<span class="text-red-600 font-bold text-lg text-center">'.$data['howto_err'].'</span>' ?>
<label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
<input type="text" name="image" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-500 focus:border-pink-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="Image url...">
<?php echo '<span class="text-red-600 font-bold text-lg text-center">'.$data['image_err'].'</span>' ?>
<button type="submit" class="my-8 py-2.5 px-5 mr-2 mb-2 text-sm font-medium focus:outline-none bg-pink-900 rounded-lg border text-white border-gray-200 hover:bg-gray-100  focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Done</button>
</form> 
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>