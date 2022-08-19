function disappear(){
    var elements = document.getElementsByClassName("test");
    for(i=0; i<elements.length;i++){
        elements[i].style.display="none";
        
    }; 
    alert("The paragraph is now hidden!"); 
}
