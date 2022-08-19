window.addEventListener("load", function () {
  const div = document.querySelector("footer div");
  let des = document.createElement("input");
  des.setAttribute("type", "text");
  var plus = (des.textContent = "?");
  let str = plus.slice(0, 5);
  div.appendChild(des);
});
