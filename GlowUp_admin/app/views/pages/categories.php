<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/sidebar.php'; ?>
<div class="bg-white w-full h-full overflow-auto flex flex-col">
<div class="w-full flex justify-end items-center my-10">
        <a href="<?=URLROOT?>/dashboard/addcategorie" class="font-bold font-serif text-pink-600 cursor-pointer underline decoration-1 ml-10 mr-20">Add categorie</a>
    </div>
    <?php echo '<span class="text-green-600 font-bold text-lg text-center">'.$data['delete'].'</span>' ?>  
<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 place-items-center overflow-auto">
    <?php foreach ($data['categorie'] as $categorie):?>
        <div class="w-64 h-94 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg h-2/4 w-full" src="<?=Imagepath."/".$categorie->Image_cat?>" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?=$categorie->name_cat?></h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?=$categorie->discription_cat?></p>
    </div>
    <div class="flex justify-around w-full mb-4">
    <a href="<?=URLROOT?>/dashboard/editcat/<?=$categorie->id_cat?>" class="text-white bg-pink-700 hover:bg-pink-800 focus:ring-4 focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-pink-600 dark:hover:bg-pink-700 focus:outline-none dark:focus:ring-pink-800">Update</a>
    <a href="<?=URLROOT?>/dashboard/deletecat/<?=$categorie->id_cat?>" class="text-white bg-pink-700 hover:bg-pink-800 focus:ring-4 focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-pink-600 dark:hover:bg-pink-700 focus:outline-none dark:focus:ring-pink-800">Delete</a></div>
</div>
        <?php endforeach?>
</div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>