<?php require APPROOT . '/views/inc/header.php'; ?>
<div class=" flex justify-around items-center h-[550px] bg-[url('<?php echo URLROOT; ?>/public/img/butterfly.png')]">
<div class="hidden sm:flex flex-col justify-center h-[70%] bg-cover bg-center bg-pink-100 w-[30%] rounded-[70%]">
   <div class="flex flex-col justify-center h-[90%] bg-cover bg-center bg-pink-800 w-[90%] rounded-[70%]">
	<img src="<?php echo URLROOT; ?>/public/img/pretty.jpg" class="object-fill h-[90%] w-[90%] rounded-[70%]">
	</div>
</div>
<div class="text-center h-full w-[60%] opacity-100 flex flex-col justify-center items-center ">
  <h1 class="text-5xl font-extrabold text-black font-serif m-8">New Cosmetic products</h1>
  <p class="m-4 font-bold" >In <span class="text-pink-900 ">GlowUp</span> You can find all u need to know about cosmetic products
  ,The best cosmetic catalog discover all categories of products</p>
  <a href="#animation-carousel" class="m-8 py-2 px-4 text-white rounded-lg bg-pink-900 cursor-pointer hover:drop-shadow-xl">Discover</a>
</div>
</div>
<div id="animation-carousel" class="relative" data-carousel="static">

    <!-- Carousel wrapper -->
    <div class="relative overflow-hidden h-96 ">
    <?php foreach ($data['categories'] as $cat) : ?>
    <div class="flex items-center  ease-linear bg-cover bg-center bg-[url('<?= $cat->Image ?>')]" data-carousel-item>
           <div class="w-2/4 sm:w-1/4 h-full bg-black flex flex-col justify-center items-center">
			<p class="text-white text-lg m-8 font-serif"><?= $cat->discription ?></p>
		    <a class="m-8 py-2 px-4 text-white rounded-lg bg-pink-900 cursor-pointer hover:drop-shadow-xl" href="<?=URLROOT?>/Pages/products"><?= $cat->name ?></a>
		   </div> 
        </div>
   <?php endforeach ?>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>

