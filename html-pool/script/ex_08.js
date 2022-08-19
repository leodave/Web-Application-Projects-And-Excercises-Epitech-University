window.addEventListener("load", function () {
  var parent = document.querySelector("canvas");
  children = [];
  var ctx = parent.getContext("2d");
  for (var i = parent.childNodes.length - 1; i >= 0; i--) {
    children.push(parent.childNodes[i]);
    parent.removeChild(parent.childNodes[i]);
  }

  children.sort(function (a, b) {
    return (
      parent.getComputedStyle(a)["left"] - canvas.getComputedStyle(b)["left"]
    );
  });

  for (var i in children) {
    parent.appendChild(children[i]);
  }
});
// add them back to the parent in order
