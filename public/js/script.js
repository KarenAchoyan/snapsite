const bannerText = document.querySelector('.banner-text');
window.addEventListener('load', function() {
    bannerText.classList.add('fade-in');
});


// const templateButtons = document.querySelectorAll('.item-template');
$('.item-template').click(function(){
    $(this).find('.zoom-template').fadeIn();
    $(this).find('.back-zoom').fadeIn();
})
//
// templateButtons.forEach(function (x){
//     x.onclick=function(){
//         x.querySelector('.zoom-template').style.display='block';
//         x.querySelector('.back-zoom').style.display='block';
//     }
//     x.querySelector('.close-temp-window').onclick=function(){
//         this.parentElement.style.opacity='0';
//         this.parentElement.style.visibility='hidden';
//
//         this.parentElement.parentElement.querySelector('.back-zoom').style.opacity='0';
//         this.parentElement.parentElement.querySelector('.back-zoom').style.visibility='hidden';
//     }
// })



