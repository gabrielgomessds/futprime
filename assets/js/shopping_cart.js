let cartShirt = [];

let btn = document.querySelector(".btnShoppingCart");
let idShirt = document.querySelector(".idShirt").value;
let nameShirt = document.querySelector(".name_shirt").innerText;
let priceShirt = document.querySelector(".price_shirt").innerText;
let symbol_shirt = document.querySelector(".symbol_shirt").getAttribute('src');
let urlShirt = window.location.href;



let infoShirts = {
   "id": idShirt,
   "name": nameShirt,
   "price": priceShirt,
   "img": symbol_shirt, 
   "url": urlShirt,
}

jsonShirt = JSON.stringify(infoShirts);

let productsInCart = JSON.stringify(localStorage.getItem("futprime_cart"));


btn.addEventListener('click', () => {

   if (productsInCart == '') {
      cartShirt.push(jsonShirt);
      localStorage.setItem('futprime_cart', cartShirt)
   }else{
      let obj = productsInCart.concat(jsonShirt);

      cartShirt.push(obj)
      console.log(cartShirt);
      localStorage.setItem('futprime_cart', cartShirt);
      console.log(localStorage.getItem('futprime_cart'));
   }


});


console.log(localStorage.getItem('futprime_cart'));
localStorage.clear();