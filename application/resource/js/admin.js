// slide bar animation
document.querySelector('.element1').addEventListener('click',(e)=>{
    if(!$('.element1 > div').hasClass('item-active')){
    $('.element1 > div').addClass('item-active');
    }else{
        $('.element1 > div').removeClass('item-active'); 
    }
})
document.querySelector('.element2').addEventListener('click',(e)=>{
    if(!$('.element2 > div').hasClass('item-active')){
        $('.element2 > div').addClass('item-active');
        }else{
            $('.element2 > div').removeClass('item-active'); 
        }
})
document.querySelector('.element3').addEventListener('click',(e)=>{
    if(!$('.element3 > div').hasClass('item-active')){
        $('.element3 > div').addClass('item-active');
        }else{
            $('.element3 > div').removeClass('item-active'); 
        }
})
document.querySelector('.element4').addEventListener('click',(e)=>{
    if(!$('.element4 > div').hasClass('item-active')){
        $('.element4 > div').addClass('item-active');
        }else{
            $('.element4 > div').removeClass('item-active'); 
        }
})

