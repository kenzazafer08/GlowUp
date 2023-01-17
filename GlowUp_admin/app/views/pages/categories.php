<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/sidebar.php'; ?>
<div class="bg-white w-full h-full overflow-auto flex flex-col">
<div class="w-full flex justify-end items-center my-10">
        <a href="<?=URLROOT?>/pages/addcategorie" class="font-bold font-serif text-pink-600 cursor-pointer underline decoration-1 ml-10 mr-20">Add categorie</a>
    </div>
<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 place-items-center">
<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg" src="<?=URLROOT?>/public/img/makeup.jpg" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Makeup</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here you can find all types of makeup that suits your desire</p>
    </div>
    <div class="flex justify-around w-full mb-4">
    <button type="button" class="text-white bg-pink-700 hover:bg-pink-800 focus:ring-4 focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-pink-600 dark:hover:bg-pink-700 focus:outline-none dark:focus:ring-pink-800">Update</button>
    <button type="button" class="text-white bg-pink-700 hover:bg-pink-800 focus:ring-4 focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-pink-600 dark:hover:bg-pink-700 focus:outline-none dark:focus:ring-pink-800">Delete</button></div>
</div>
<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg" src="<?=URLROOT?>/public/img/skin.jpg" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Skin care</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here you can find all types of skincare products that suits your desire</p>
    </div>
    <div class="flex justify-around w-full mb-4">
    <button type="button" class="text-white bg-pink-700 hover:bg-pink-800 focus:ring-4 focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-pink-600 dark:hover:bg-pink-700 focus:outline-none dark:focus:ring-pink-800">Update</button>
    <button type="button" class="text-white bg-pink-700 hover:bg-pink-800 focus:ring-4 focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-pink-600 dark:hover:bg-pink-700 focus:outline-none dark:focus:ring-pink-800">Delete</button></div>
</div>
<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg" src="<?=URLROOT?>/public/img/hair.jpg" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Hair</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here you can find all types of hair products that suits your desire</p>
    </div>
    <div class="flex justify-around w-full mb-4">
    <button type="button" class="text-white bg-pink-700 hover:bg-pink-800 focus:ring-4 focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-pink-600 dark:hover:bg-pink-700 focus:outline-none dark:focus:ring-pink-800">Update</button>
    <button type="button" class="text-white bg-pink-700 hover:bg-pink-800 focus:ring-4 focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-pink-600 dark:hover:bg-pink-700 focus:outline-none dark:focus:ring-pink-800">Delete</button></div>
</div>
</div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>