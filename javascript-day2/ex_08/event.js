function selector(){
    var element= document.getElementById("menu");
    if(element.style.display !== "none"){
        element.style.display ="none";
    }else
    {
        element.style.display= "block";
    }
}
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
