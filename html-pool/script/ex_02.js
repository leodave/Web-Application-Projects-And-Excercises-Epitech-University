window.addEventListener("load", function () {
  var count = 0;
  const div = document.querySelector("footer div");
  const click = function () {
    count++;
    div.textContent = count + "-banana";
  };
  div.addEventListener("click", click);
});
