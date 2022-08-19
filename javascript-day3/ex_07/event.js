$(document).ready(function () {
  $("p").click(function () {
    $(this).hide();
  });
  $("p").mouseover(function () {
    $(this).css("color", "grey");
  });
  $("p").mouseleave(function () {
    $(this).css("color", "red");
  });
});
