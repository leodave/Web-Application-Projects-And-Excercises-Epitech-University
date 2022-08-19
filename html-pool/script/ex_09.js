window.addEventListener("load", function () {
  const canvas = document.querySelector("canvas");
  function allowDrop(ev) {
    ev.preventDefault();
  }

  function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.canvas);
  }

  function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.querySelector());
  }
  canvas.addEventListener("ondrop", drop);
  canvas.addEventListener("ondragover", allowDrop);
  canvas.addEventListener("ondrop", drop);
});
