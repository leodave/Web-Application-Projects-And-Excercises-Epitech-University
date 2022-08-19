function selector()
{
    var elements = document.getElementsByTagName("p");
    for(i=0; i<elements.length;i++){
        elements[i].style.display='none';
    }
       
}  
function over()
{
    var elements = document.getElementsByTagName("p");
    for(i=0; i<elements.length;i++){
        elements[i].style.color='grey';
    }
       
}  
function leave()
{
    var elements = document.getElementsByTagName("p");
    for(i=0; i<elements.length;i++){
        elements[i].style.color='red';
    }
       
}  


