<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="w-full h-screen bg-[url('<?=URLROOT?>/public/img/bgg.jpg')] bg-cover bg-center flex flex-col items-center justify-center">
    <div class="w-[70%] sm:h-[80%] h-[50%] bg-white  shadow-lg shadow-black-100 flex"> 
        <div class="hidden w-1/2 h-full bg-[url('<?=URLROOT?>/public/img/bgg.jpg')] bg-cover sm:flex flex-col items-center justify-around">
        <h2 class="text-4xl font-extrabold text-white text-center font-serif">GlowUp Admin </h2>
        
        </div>
<div class="sm:w-1/2 w-full h-full bg-white bg-cover flex flex-col items-center justify-around">
           
<form class="w-2/3" action="<?=URLROOT?>/pages/login" method='post' >
  <div class="mb-6">
    <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your username</label>
    <input type="text" name="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-500 focus:border-pink-500 block w-full p-2.5" placeholder="name@gmail.com" >
    <span class="text-red-600 font-bold"><?php echo $data['username_err'] ?></span>
  </div>
  <div class="mb-6">
    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
    <input type="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-500 focus:border-pink-500 block w-full p-2.5" >
    <span class="text-red-600 font-bold"><?php echo $data['password_err'] ?></span>
  </div>

  <button type="submit" class="text-white bg-pink-900 hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Log In</button>
</form>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>