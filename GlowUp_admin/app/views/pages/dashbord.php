<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/sidebar.php'; ?>
<div><h1 class="font-bold mt-10 ml-10 text-2xl"> Welcome <span class="text-pink-600 text-2xl"><?=$_SESSION['username']->Username?></span></h1></div>
<div class="  w-full sm:flex-row flex-col flex justify-around items-center">
<div class="my-10 w-96 p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
<a href="#" class="flex justify-between items-center w-[90%] text-bold hover:text-pink-900">
        <h5 class="mb-2 text-2xl font-semibold hover:text-pink-900">Products</h5>
        <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400"><?php echo $data['nbp'] ?></p>
    <a href="<?=URLROOT?>/dashboard/products" class="inline-flex items-center text-pink-600 hover:underline">
        See our Products
        <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
    </a>
</div>
<div class="my-10 w-96 p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">

    <a href="#" class="flex justify-between items-center w-[90%] text-bold hover:text-pink-900">
        <h5 class="mb-2 text-2xl font-semibold hover:text-pink-900">Categories</h5>
    <i class="fa fa-bars" aria-hidden="true"></i></a>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400"><?php echo $data['nbc'] ?></p>
    <a href="<?=URLROOT?>/dashboard/categories" class="inline-flex items-center text-pink-600 hover:underline">
        See our Categories
        <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
    </a>
</div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
