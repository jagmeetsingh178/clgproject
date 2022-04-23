const cartIcon =  document.querySelector('.nav_icon');
const cartSection = document.querySelector('.cart-section');
const cartClose = document.querySelector('.cart-close');

cartIcon.addEventListener('click',(e)=> {
    cartSection.classList.add('cart-active');  
});
cartClose.addEventListener('click',(e)=> {
    cartSection.classList.remove('cart-active');
})