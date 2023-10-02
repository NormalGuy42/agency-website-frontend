var navMenuBtn = document.querySelector('.burger');
var navMenu = document.querySelector('header >nav');

navMenuBtn.addEventListener('click',()=>{
    navMenu.classList.toggle('showMenu');
})
document.addEventListener('click',(e)=>{
    if(!e.target.closest('.burger') && navMenu.classList.contains('showMenu')){
        navMenu.classList.remove('showMenu');
    }
})




//Remove status message
var flashMessage = document.querySelector('.statusBox');
if(flashMessage != undefined){
    setTimeout(()=>{
        flashMessage.innerHTML = '';
    },3000)
}
var inputs = document.querySelectorAll('input');
inputs.forEach(input=>{input.setAttribute('autocomplete','off')})