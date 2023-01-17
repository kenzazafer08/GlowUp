<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="w-full flex flex-col items-center">
<?php require APPROOT . '/views/inc/menu.php'; ?>
    <div class="min-h-[550px] w-full bg-gray-50">
        <h1 class="m-8 text-center text-2xl font-extrabold font-serif underline decoration-8 decoration-pink-300">Products</h1>
        <div class="m-4 grid grid-cols-1 sm:grid-cols-5 gap-4 place-items-center">
        <a href="<?= URLROOT ?>/pages/details"><div class="flex flex-col justify-around items-center h-64 w-56 bg-white border border-pink-100 hover:shadow">
            <img src="<?=URLROOT?>/public/img/lip.webp" alt="" class="h-2/4 w-3/4">
            <h1 class="font-bold text-lg font-serif">BARE MINERALS</h1>
            <p class="text-center text-sm">Bare Minerals Mineralist Lasting Matte Liquid Lipstick</p>
        </div></a>
        <div class="flex flex-col justify-around items-center h-64 w-56 bg-white border border-pink-100 hover:shadow">
        <img src="<?=URLROOT?>/public/img/cream.avif" alt="" class="h-2/4 w-3/4">
            <h1 class="font-bold text-lg font-serif">AHAVA</h1>
            <p class="text-center text-sm">Ahava Mineral Hand Cream - Sea-Kissed</p>
        </div>
        <div class="flex flex-col justify-around items-center h-64 w-56 bg-white border border-pink-100 hover:shadow">
        <img src="<?=URLROOT?>/public/img/conditioner.webp" alt="" class="h-2/4 w-3/4">
            <h1 class="font-bold text-lg font-serif">ALFAPARF</h1>
            <p class="text-center text-sm">Alfaparf Nutritive Leave In Conditioner</p>
        </div>
        <div class="flex flex-col justify-around items-center h-64 w-56 bg-white border border-pink-100 hover:shadow">
        <img src="<?=URLROOT?>/public/img/mascara.webp" alt="" class="h-2/4 w-3/4">
            <h1 class="font-bold text-lg font-serif">BARE MINERALS</h1>
            <p class="text-center text-sm">Bare Minerals Strength and Length Serum Mascara</p>
        </div>
        <div class="flex flex-col justify-around items-center h-64 w-56 bg-white border border-pink-100 hover:shadow">
        <img src="<?=URLROOT?>/public/img/body.webp" alt="" class="h-2/4 w-3/4">
            <h1 class="font-bold text-lg font-serif">AHAVA</h1>
            <p class="text-center text-sm">Ahava Caressing Body Sorbet Deadsea Plants</p>
        </div>
        </div>
</div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>