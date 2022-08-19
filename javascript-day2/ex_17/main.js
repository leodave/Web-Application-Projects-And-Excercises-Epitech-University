class Glop {
  color;
  constructor(hexa) {
    console.log("Bwello");
    this.color = hexa;
    document.getElementsByClassName("platypus")[0].style.color = "#" + hexa;
  }
  destructor() {
    console.log("Boodnight");
  }
  Func() {
    var elements = document.getElementsByTagName("p");
    for (var i = 0; i < elements.length; i++) {
      elements[i].style.color = "#" + this.color;
    }
  }
}
var g = new Glop("0000FF");
function myFunc() {
  g.Func();
}
