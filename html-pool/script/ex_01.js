const fn = function () {
  document.querySelector("footer div").textContent = "changed!!";
};
window.addEventListener("load", fn);
