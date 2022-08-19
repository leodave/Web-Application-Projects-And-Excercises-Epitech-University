function right()
{
    var elements = document.getElementsByClassName("platypus");
    for(i=0; i<elements.length;i++){
        elements[i].style.position='relative';
        elements[i].style.right='-150px';
        elements[i].style.bottom='-200px';
        elements[i].style.background='green';
    }
       
}  