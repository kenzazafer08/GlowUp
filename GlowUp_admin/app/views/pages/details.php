<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/sidebar.php'; ?>
<div class="w-full h-full flex flex-col items-center bg-white overflow-auto">
    <?php foreach ($data['products'] as $product) : ?>
<?php if ($product->id == $data['id']) : ?>
    <div class="w-full flex justify-end items-center mt-4 ">
        <a href="<?=URLROOT?>/dashboard/editpro/<?=$product->id?>" class="font-bold font-serif text-pink-600 cursor-pointer underline decoration-1 mr-10 ">Edit</a>
        <a href="<?=URLROOT?>/dashboard/deletepro/<?=$product->id?>" class="font-bold font-serif text-pink-600 cursor-pointer underline decoration-1 mr-20">Delete</a>
    </div>
    <div class="flex items-center sm:flex-row flex-col justify-around">
<div class="h-full w-2/4 my-8">
    <img src="<?=Imagepath."/".$product->Image ?>" alt="" class="mb-4 w-full hover:shadow-sm cursor-pointer">
</div>    
<div class="flex flex-col w-2/4 my-4">
<h1 class="text-sm font-bold font-serif"><?= $product->brand ?></h1>
    <p class="text-lg my-4 text-pink-800 font-extrabold"><?= $product->name ?></p>
    <p class="mb-2"><?= $product->prix ?>DH</p>
    <p class="font-bold mb-2"><?= $product->name_cat ?></p>
    <div class="my-4 w-[90%] font-bold ">Discription </div>
    <div class="mx-4 w-[90%]"><p><?= $product->discription ?></p></div>
    <div class="my-4 w-[90%] font-bold ">How To :</div>
    <div class="mx-4 w-[90%]"><p><?= $product->HowTo ?></p></div>
</div>
</div>
</div>
<?php endif ?>
<?php endforeach ?>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>