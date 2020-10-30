class quantity{ 
  constructor(clicks)
  {
      this.clicks=clicks;
  }
 increse(x){
   var count=1;
   count=count+clicks;
   document.getElementById(x).innerHTML=count;
}

 decrease(x){
   if(clicks!=1)
   {
       clicks-=1;
       document.getElementById(x).innerHTML=clicks;
   }
}
}
var   clicks=1;
var quan= new quantity(clicks);

function re(){
  alert('dncjknjkdnh');
}

function disBtn()
{
  // document.getElementById('request').disabled=true;
  document.getElementById('request').style.backgroundColor="gray";
  document.getElementById('request').innerHTML="Pending";
  // window.location="../views/cartItem.php";
}