<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="w-full flex flex-col items-center">
    <div class="min-h-[550px] w-full bg-gray-50">
        <h1 class="m-8 text-center text-2xl font-extrabold font-serif underline decoration-8 decoration-pink-300">Products</h1>
        <div class="m-4 grid grid-cols-1 sm:grid-cols-5 gap-4 place-items-center">
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