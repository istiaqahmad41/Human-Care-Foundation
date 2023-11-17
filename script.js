var counter1 =document.querySelector('.d1');
var counter2 =document.querySelector('.data2');
var counter3 =document.querySelector('.d3');
var div=document.getElementById('sec_4');
let count=1;
let test=1;
let beta=1;
 


        setInterval(()=>{
            if(count<670)
         count++;
         counter1.innerText=count+"k $";
        },100)

        setInterval(()=>{
            if(test<580)
         test++;
         counter2.innerText=test+"k $";
        },100)
        
        setInterval(()=>{
            if(beta<814)
         beta++;
         counter3.innerText=beta+"k $";
        },100)
         
    
   









