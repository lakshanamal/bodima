function checkAggre()
{
    window.addEventListener('click',(e)=>{
        
        if(document.getElementById('check').checked==true)
        {
            document.getElementById('register').disabled=false;
            document.getElementById('register').style.backgroundColor='#ac26d8';
        }
        else
        {
            document.getElementById('register').disabled=true;
            document.getElementById('register').style.backgroundColor='gray';
        }
    });
    window.addEventListener('load',(e)=>{
        document.getElementById('register').disabled=true;
        document.getElementById('register').style.backgroundColor='gray';
    })
}

checkAggre();