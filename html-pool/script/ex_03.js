window.addEventListener("load", function () {
  const div = document.querySelector("footer div");

  const click = function () {
    let name = "";
    while (name == "") {
      name = prompt("what is your name?");
    }
    div.textContent = name;
    if (name !== null) {
      sure = confirm("Are you sure " + name + " is yor name?");
      div.textContent = "Hello " + name;
    }
  };
  div.addEventListener("click", click);
});
