<?php require APPROOT . '/views/inc/style.php'; ?>
<div class="w-full h-8 bg-pink-800 flex justify-center items-center">
<p class="text-sm text-white">Discover best cosmetic products</p>
</div>
<div class="w-full h-12 flex items-center bg-pink-50 justify-around font-serif">
    <div class="w-2/4 text-center flex items-center"><img class="w-[60px] h-[50px]" src="<?=URLROOT?>/public/img/GlowUp.png" /><h1 class="w-1/4 sm:w-2/4 text-center text-pink-800 text-xs font-extrabold sm:text-2xl">GlowUp Cosmetics</h1></div>
    <form class="hidden  w-1/4 h-[100%] text-pink-800 mr-8 sm:flex justify-around items-center">   
        <i class="fa fa-search"></i>
        <input type="search" id="default-search" class="border-none h-[70%] block w-full p-4 pl-10 text-sm text-pink-800 bg-pink-50 focus:ring-pink-50 focus:border-pink-50 " placeholder="Search" required>
        <button type="submit" class="sm:text-white bg-pink-800 hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-4 py-2">Search</button> 
    </form>
    <form class="sm:hidden mr-4 w-2/4 flex justify-around items-center">
        <input type="search" id="default-search" class="border-none h-[70%] block w-full p-4 pl-10 text-sm text-pink-800 bg-pink-50 focus:ring-pink-50 focus:border-pink-50 " placeholder="Search" required>
        <button type="submit" class="text-pink-800"><i class="fa fa-search"></i></button> 
    </form>
</div>