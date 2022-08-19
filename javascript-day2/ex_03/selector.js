function selector(){
    var elements = document.getElementsByClassName("test");
    for(var i=0; i<elements.length;i++){
        elements[i].style.display='none';
    }    
}
selector()