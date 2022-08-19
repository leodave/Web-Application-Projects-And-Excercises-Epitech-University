$(document).ready(function () {
  $("a")
    .filter((index, element) => element.target == "_blank")
    .map((index, element) => (element.style = "color:red"));
});
