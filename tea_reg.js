
for(let i=0;i<=7;i++)
{
let input=document.querySelectorAll("input")[i];
input.addEventListener("blur",function(e)
{
    if(input.value!="")
    {
  input.classList.add("shadow");
    }
});
}




for(let i=0;i<=1;i++)
{
    let drop=document.querySelectorAll("select")[i];
    drop.addEventListener("blur",function(e)
{
    if(drop.value!="")
    {
  drop.classList.add("shadow");
    }
});
}

    
let fo=document.getElementsByTagName("form")[0];



// popup

   






