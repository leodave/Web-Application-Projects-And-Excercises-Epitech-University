$(document).ready(function () {
  $("#par").hover(function () {
    $("p").addClass("blue");
  });
  $("#par").click(function () {
    $("#pre").toggle();
  });
});
