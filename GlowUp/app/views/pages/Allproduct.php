<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="w-full flex flex-col items-center">
    <div class="min-h-[550px] w-full bg-gray-50">
        <div class="flex justify-between items-center">
        <h1 class="hidden sm:block m-8 mx-10 text-center text-2xl font-extrabold font-serif underline decoration-8 decoration-pink-300">Products</h1>
  <div class="sm:w-[50%] my-10 w-full flex justify-around">   
<form class="sm:mx-10 [40%]">   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
        <input type="search" id="search"  class="block mx-auto p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-pink-500 focus:border-pink-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="Name..." required>
     </div>
</form>
<select id="categories" class="w-[40%] sm:mx-10 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-500 focus:border-pink-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500">
<option selected>Choose a categorie</option>
<?php foreach($data['categories'] as $categorie) : ?>
  <option value="<?=$categorie->id_cat ?>"><?=$categorie->name_cat?></option>
  <?php endforeach ?>  
</select> </div>  
        </div>
        <div id="productsContainer" class="m-4 grid grid-cols-1 sm:grid-cols-5 gap-4 place-items-center">
        <?php foreach($data['products'] as $product) : ?>
            <a href="<?= URLROOT ?>/pages/details/<?= $product->id ?>"><div class="flex flex-col justify-around items-center h-64 w-56 bg-white border border-pink-100 hover:shadow">
            <img src="<?= $product->Image ?>" alt="" class="h-2/4 w-3/4">
            <h1 class="font-bold text-lg font-serif"><?= $product->brand ?></h1>
            <p class="text-center text-sm"><?= $product->name ?></p>
            <p class="text-center text-sm text-pink-900"><?= $product->name_cat ?></p>
        </div></a>
        <?php endforeach ?>    
        </div>
</div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>