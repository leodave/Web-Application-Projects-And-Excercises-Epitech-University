function disappear(){
    var elements = document.getElementsByClassName("test");
    var ele = document.getElementsByClassName("platypus");
    for(i=0; i<elements.length;i++){
        elements[i].style.display="none";
    }; 
    for(i=0; i<ele.length;i++){
        ele[i].style.display="none";
    }; 
}
disappear()
