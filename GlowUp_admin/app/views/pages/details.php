<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/sidebar.php'; ?>
<div class="w-full h-full flex flex-col items-center bg-white overflow-auto">
    <?php foreach ($data['products'] as $product) : ?>
<?php if ($product->id == $data['id']) : ?>
    <div class="w-full flex justify-end items-center mt-4 ">
        <a href="<?=URLROOT?>/dashboard/editpro/<?=$product->id?>" class="font-bold font-serif text-pink-600 cursor-pointer underline decoration-1 mr-10 ">Edit</a>
        <a href="<?=URLROOT?>/dashboard/deletepro/<?=$product->id?>" class="font-bold font-serif text-pink-600 cursor-pointer underline decoration-1 mr-20">Delete</a>
    </div>
<div class="flex sm:flex-row flex-col items-center justify-around">
<div class="flex flex-col items-center w-2/4 my-8">
    <img src="<?= $product->Image ?>" alt="" class="mb-4 w-[40%] border-2 border-pink-100 hover:shadow-sm cursor-pointer">
    <h1 class="text-sm font-bold font-serif"><?= $product->brand ?></h1>
    <p class="text-lg my-4"><?= $product->name?></p>
    <p class="font-bold mb-2"><?= $product->name_cat ?></p>
</div>    
<div class="flex flex-col w-2/4 my-4">
    <div class="my-4 w-[90%] font-bold border-b border-black">Discription </div>
    <div class="mx-4 w-[90%]"><p><?= $product->discription ?></p></div>
    <div class="my-4 w-[90%] font-bold border-b border-black ">How To :</div>
    <div class="mx-4 w-[90%]"><p><?= $product->HowTo ?></p></div>
</div>
</div>
<?php endif ?>
<?php endforeach ?>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>