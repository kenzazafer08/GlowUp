<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/sidebar.php'; ?>
<div class="bg-white w-full h-full overflow-auto flex flex-col">
<div class="w-full flex sm:flex-row flex-col justify-around items-center my-10 ">
        <a href="<?=URLROOT?>/dashboard/addproduct"  class="font-bold font-serif text-pink-600 cursor-pointer underline decoration-1 mr-20">Add products</a>
<form class="sm:mx-10 [40%]">   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
        <input type="search" id="search"  class="block mx-auto p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-pink-500 focus:border-pink-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="Name..." required>
     </div>
</form>
<select id="categories" class="sm:mx-10 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-500 focus:border-pink-500 block px-10 py-4">
<option selected>Categorie</option>
<?php foreach($data['categories'] as $categorie) : ?>
  <option value="<?=$categorie->id_cat ?>"><?=$categorie->name_cat?></option>
  <?php endforeach ?>  
</select> </div>  
    <?php echo '<span class="text-green-600 font-bold text-lg text-center">'.$data['delete'].'</span>' ?>  
<div id="productsContainer" class="m-4 grid grid-cols-1 sm:grid-cols-4 gap-4 place-items-center">
    <?php foreach($data['products'] as $products) : ?>
    <a href="<?= URLROOT ?>/dashboard/details/<?= $products->id ?>"><div class="flex flex-col justify-around items-center h-64 w-56 bg-white border border-pink-100 hover:shadow">
            <img src="<?=Imagepath."/".$products->Image ?>" alt="" class="h-2/4 w-3/4">
            <h1 class="font-bold text-lg font-serif"><?= $products->brand ?></h1>
            <p class="text-center text-sm"><?= $products->name ?></p>
            <p class="text-center text-sm text-pink-900 mb-4 font-bold"><?= $products->prix ?>DH</p>
        </div></a>     
    <?php endforeach ?>   </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>