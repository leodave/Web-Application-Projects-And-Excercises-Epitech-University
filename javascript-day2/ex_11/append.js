function myFunction() {
    var list= document.getElementById("listItem");
    var text = "";
    var i;
    for (i = 0; i< list.length ;i++){
        text += list.elements[i].value + "<br>";
    }
     
    document.getElementById("demo").innerHTML = text; 
  }