function selector(){
    var elements = document.getElementsByTagName("a");
  if(elements.target!== "_blank")
  {  
    for(i=0; i<elements.length;i++){
        if(elements[i].getAttribute("target")=="_blank"){
          elements[i].style.opacity='50%'

        }else{
          elements[i].style.opacity='100%';
        }
    } 
  }   
}
selector()