window.addEventListener("load", function () {
  var canvas = document.querySelector("canvas");
  var ctx = canvas.getContext("2d");

  // Sides: a = 30   b = 30   c = 59

  var triangle = {
    x1: 6,
    y1: 6,
    x2: 14,
    y2: 10,
    x3: 6,
    y3: 14,
  };

  ctx.strokeStyle = "white";

  ctx.beginPath();
  ctx.moveTo(triangle.x1, triangle.y1);
  ctx.lineTo(triangle.x2, triangle.y2);
  ctx.lineTo(triangle.x3, triangle.y3);
  ctx.lineTo(triangle.x1, triangle.y1);
  ctx.closePath();
  ctx.stroke();

  let playSound = () => new Audio("./triangle.ogg").play();
  let PauseSound = () => new Audio("./triangle.ogg").pause();
  let StopSound = () => new Audio("./triangle.ogg").stop();
  let MuteSound = () => new Audio("./triangle.ogg").mute();
  canvas.addEventListener("click", playSound);
  button1 = document.getElementsByTagName("button")[0];
  button2 = document.getElementsByTagName("button")[1];
  button3 = document.getElementsByTagName("button")[2];
  button1.addEventListener("click", PauseSound);
  button2.addEventListener("click", StopSound);
  button3.addEventListener("click", MuteSound);
});
