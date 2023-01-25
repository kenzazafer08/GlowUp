<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/sidebar.php'; ?>
<div class="bg-white w-full h-full overflow-auto flex flex-col">
<div class="w-full flex justify-end items-center my-10 ">
        <a href="<?=URLROOT?>/dashboard/addproduct"  class="font-bold font-serif text-pink-600 cursor-pointer underline decoration-1 mr-20">Add products</a>
    </div>
    <?php echo '<span class="text-green-600 font-bold text-lg text-center">'.$data['delete'].'</span>' ?>  
<div class="m-4 grid grid-cols-1 sm:grid-cols-4 gap-4 place-items-center">
    <?php foreach($data['products'] as $products) : ?>
    <a href="<?= URLROOT ?>/dashboard/details/<?= $products->id ?>"><div class="flex flex-col justify-around items-center h-64 w-56 bg-white border border-pink-100 hover:shadow">
            <img src="<?= $products->Image ?>" alt="" class="h-2/4 w-3/4">
            <h1 class="font-bold text-lg font-serif"><?= $products->brand ?></h1>
            <p class="text-center text-sm"><?= $products->name ?></p>
            <p class="text-center text-sm text-pink-900"><?= $products->name_cat ?></p>
        </div></a>     
    <?php endforeach ?>   </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>