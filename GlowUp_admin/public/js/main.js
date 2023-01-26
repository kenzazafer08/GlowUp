$(document).ready(function(){
    $('#add-form').click(function(){
        $.ajax({
            url : 'http://localhost/GlowUp_admin/pages/categories/',
            method: 'GET',
            success : function(data){
                const categories = JSON.parse(data)
                displayForms()
                displayCategories(categories)

            }
        })
    })
    $('#search').keyup(function(){
        const name = document.getElementById('search').value
        console.log(name)
        $.ajax({
            url : 'http://localhost/GlowUp/pages/name/'+name,
            method: 'GET',
            success : function(data){
                const products = JSON.parse(data)
                displayProducts(products)
            }
        })
    })
    $('#categories').change(function(){
        const name = $('#categories').val()
        console.log(name)
        $.ajax({
            url : 'http://localhost/GlowUp/pages/categorie/'+name,
            method: 'GET',
            success : function(data){
                console.log(data);
                const products = JSON.parse(data)
                displayProducts(products)
            }
        })
    })
})

function displayForms(){
    const cont = document.querySelector("#form-container")
    cont.innerHTML += `
     <hr class="mt-10">
    <label for="brand" class="block mt-10 mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
    <input required type="text" name="brand[]" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-500 focus:border-pink-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="brand...">
    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
    <input required type="text" name="name[]" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-500 focus:border-pink-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="product...">
    <label for="prix" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prix</label>
    <input required type="text" name="prix[]" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-500 focus:border-pink-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="price...">
    <label for="categorie" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categorie</label>
    <select required name="categorie[]"  class="cat bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-500 focus:border-pink-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500">
    </select>
    <label for="discription" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Discription</label>
    <textarea required name="discription[]" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-pink-500 focus:border-pink-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="..."></textarea>
    <label for="hwoto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">How to use</label>
    <textarea required name="howto[]" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-pink-500 focus:border-pink-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="..."></textarea>
    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
    <input required name="image[]" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
    `
}

function displayCategories(categories){
    const select = document.querySelectorAll('.cat')
    select.forEach(item => {
        item.innerHTML = '<option class="" selected val="0" >Choose a categorie</option>'
        categories.forEach(cat => {
            item.innerHTML += `
                <option class="" value="${cat.id_cat}" >${cat.name_cat}</option>
            `
        })
    })
}

function displayProducts(products){
    const cont = document.querySelector("#productsContainer")
    cont.innerHTML = ''

    products.forEach(product => {
        cont.innerHTML += `
        <a href="http://localhost/GlowUp/pages/details/${product.id}"><div class="flex flex-col justify-around items-center h-64 w-56 bg-white border border-pink-100 hover:shadow">
        <img src="http://localhost/GlowUp_admin/public/img/upload/${product.Image}" alt="" class="h-2/4 w-3/4">
        <h1 class="font-bold text-lg font-serif">${product.brand}</h1>
        <p class="text-center text-sm">${product.name}</p>
        <p class="text-center text-sm text-pink-900">${product.name_cat}</p>
    </div></a>
        `
    });
}
