<?php require APPROOT . '/views/inc/style.php'; ?>
<div class=" w-full h-8 bg-pink-800  flex justify-center items-center">
<p class="text-sm text-white">Discover best cosmetic products</p>
</div>
<div class="hidden w-full h-14 sm:flex items-center bg-pink-50 justify-around font-serif">
    
    <a href="<?=URLROOT ?>/pages" class="w-1/4 ml-10"><img class="w-[60px] h-[50px]" src="<?=URLROOT?>/public/img/GlowUp.png" /></a>
    
    <div class="w-2/4 text-center flex items-center justify-center"> <h1 class="w-1/4 sm:w-2/4 text-center text-pink-800 text-xs font-extrabold sm:text-2xl"><a href="<?=URLROOT ?>/pages/Allproduct">GlowUp Cosmetics</a></h1></div>
    <ul class="flex justify-around items-center w-1/4 mt-4 font-medium md:flex-row md:space-x-8 md:mt-0">
        <li>
                    <a href="<?=URLROOT?>/pages/Allproduct" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-pink-600 md:p-0 dark:text-gray-400 md:dark:hover:text-pink-500 dark:hover:bg-gray-700 dark:hover:text-pink-500 md:dark:hover:bg-transparent dark:border-gray-700">Products</a>
                </li>
                <li>
                    <a href="<?=URLROOT?>/pages/About" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-pink-600 md:p-0 dark:text-gray-400 md:dark:hover:text-pink-500 dark:hover:bg-gray-700 dark:hover:text-pink-500 md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                </li>
                <li>
                    <a href="<?=URLROOT?>/pages/Contact" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-pink-600 md:p-0 dark:text-gray-400 md:dark:hover:text-pink-500 dark:hover:bg-gray-700 dark:hover:text-pink-500 md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                </li>
    </ul>
</div>

<nav class="sm:hidden bg-pink-50 border-gray-200 px-2 md:px-4 py-2.5 dark:bg-gray-900">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto">
        <a href="" class="flex items-center">
            <img src="<?=URLROOT?>/public/img/GlowUp.png" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
            <h1 class="w-1/4 sm:w-2/4 text-center text-pink-800 text-xs font-extrabold sm:text-2xl"><a href="<?=URLROOT ?>/pages/Allproduct">GlowUp Cosmetics</a></h1>
        </a>
        <div class="flex items-center md:order-2">
           <button data-collapse-toggle="mega-menu" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        <div id="mega-menu" class="items-center justify-between hidden w-full text-sm md:flex md:w-auto md:order-1">
        <ul class="flex flex-col justify-around items-center mt-4 font-medium md:flex-row md:space-x-8 md:mt-0">
        <li>
                    <a href="<?=URLROOT?>/pages/Allproduct" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-pink-600 md:p-0 dark:text-gray-400 md:dark:hover:text-pink-500 dark:hover:bg-gray-700 dark:hover:text-pink-500 md:dark:hover:bg-transparent dark:border-gray-700">Products</a>
                </li>
                <li>
                    <a href="<?=URLROOT?>/pages/About" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-pink-600 md:p-0 dark:text-gray-400 md:dark:hover:text-pink-500 dark:hover:bg-gray-700 dark:hover:text-pink-500 md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                </li>
                <li>
                    <a href="<?=URLROOT?>/pages/Contact" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-pink-600 md:p-0 dark:text-gray-400 md:dark:hover:text-pink-500 dark:hover:bg-gray-700 dark:hover:text-pink-500 md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                </li>
    </ul>
        </div>
    </div>
</nav>
