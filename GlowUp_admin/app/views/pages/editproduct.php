<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/sidebar.php'; ?>
<div class="bg-white w-full h-full overflow-auto flex flex-col items-center ">
    <h1 class="mt-4 mr-4 font-extrabold font-serif text-3xl text-gray-900 h-[10%]">Edit product</h1>
<?php echo '<span class="text-green-600 font-bold text-lg text-center">'.$data['add'].'</span>' ?>    
  <form class=" w-[90%]" action='<?=URLROOT?>/dashboard/editpro/<?=$data['id']?>' method="post" enctype="multipart/form-data">
    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
<input value="<?=$data['brand']?>" type="text" name="brand" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-500 focus:border-pink-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="brand...">
<label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
<input value="<?=$data['name']?>" type="text" name="name" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-500 focus:border-pink-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="product...">
<label for="prix" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prix</label>
<input value="<?=$data['prix']?>" type="text" name="prix" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-500 focus:border-pink-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="price...">
<label for="categorie" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categorie</label>
<select name="categorie" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-500 focus:border-pink-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500">
<option selected value="<?= $data['id_cat']  ?>"><?= $data['name_cat'] ?></option>
<?php foreach($data['categories'] as $categorie) :?>
    <?php if($data['name_cat'] !=  $categorie->name_cat ):?>
        <option value="<?= $categorie->id_cat ?>"><?= $categorie->name_cat; ?></option>
 <?php endif ?>
 <?php endforeach;?>
</select>
<label for="discirption" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Discription</label>
<textarea name="discription" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-pink-500 focus:border-pink-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="..."><?=$data['discription']?></textarea>
<label for="howto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">How to use</label>
<textarea name="howto" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-pink-500 focus:border-pink-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="..."><?=$data['howto']?></textarea>
<label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
<input name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
<button type="submit" class="my-8 py-2.5 px-5 mr-2 mb-2 text-sm font-medium focus:outline-none bg-pink-900 rounded-lg border text-white border-gray-200 hover:bg-gray-100  focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Done</button>
</form> 
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>