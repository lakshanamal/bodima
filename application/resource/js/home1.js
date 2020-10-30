function scrollApper1(){
    var introText=document.querySelector('.para1');
    var introPosition=introText.getBoundingClientRect().top;
    var screenPosition=window.innerHeight;

    if(introPosition<=screenPosition)
    {
        introText.classList.add('para1-apper');
    }

}
function scrollApper2(){
    var introText=document.querySelector('.para4');
    var introPosition=introText.getBoundingClientRect().top;
    var screenPosition=window.innerHeight;

    if(introPosition<screenPosition/1.3)
    {
        introText.classList.add('para4-apper');
    }

}

function scrollApper3(){
    var introText=document.querySelector('.para5');
    var introPosition=introText.getBoundingClientRect().top;
    var screenPosition=window.innerHeight;

    if(introPosition<screenPosition/1.3)
    {
        introText.classList.add('para5-apper');
    }

}
function scrollimg1(){
    var introText=document.querySelector('.para2');
    var introPosition=introText.getBoundingClientRect().top;
    var screenPosition=window.innerHeight;

    if(introPosition<screenPosition/1.3)
    {
        introText.classList.add('para2-apper');
    }

}
function scrollimg2(){
    var introText=document.querySelector('.para3');
    var introPosition=introText.getBoundingClientRect().top;
    var screenPosition=window.innerHeight;

    if(introPosition<screenPosition/1.3)
    {
        introText.classList.add('para3-apper');
    }

}

function scrollimg3(){
    var introText=document.querySelector('.para6');
    var introPosition=introText.getBoundingClientRect().top;
    var screenPosition=window.innerHeight;

    if(introPosition<screenPosition/1.3)
    {
        introText.classList.add('para6-apper');
    }

}
function fixedTop(){
   var height=$('.header').height();
   $(window).scroll(function(){
       if($(this).scrollTop()> height){
        $('.nav').addClass('nav-fixed');

       }else{
        $('.nav').removeClass('nav-fixed');
        // console.log(height);
       }
   });
}


window.addEventListener('scroll',fixedTop);
window.addEventListener('scroll',scrollApper2);
window.addEventListener('scroll',scrollApper1);
window.addEventListener('scroll',scrollApper3);
window.addEventListener('scroll',scrollimg2);
window.addEventListener('scroll',scrollimg1);
window.addEventListener('scroll',scrollimg3);


