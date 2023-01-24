$(document).ready(function(){
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

function displayProducts(products){
    const cont = document.querySelector("#productsContainer")
    cont.innerHTML = ''

    products.forEach(product => {
        cont.innerHTML += `
        <a href="http://localhost/GlowUp/pages/details/${product.id}"><div class="flex flex-col justify-around items-center h-64 w-56 bg-white border border-pink-100 hover:shadow">
        <img src="${product.Image}" alt="" class="h-2/4 w-3/4">
        <h1 class="font-bold text-lg font-serif">${product.brand}</h1>
        <p class="text-center text-sm">${product.name}</p>
        <p class="text-center text-sm text-pink-900">${product.name_cat}</p>
    </div></a>
        `
    });
}
