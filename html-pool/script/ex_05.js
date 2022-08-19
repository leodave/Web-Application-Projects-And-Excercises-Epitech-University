window.addEventListener("load", function () {
  const select = document.querySelector("select");
  select.addEventListener("change", (event) => {
    const result = document.querySelector("footer div");
    result.style.backgroundColor = event.target.value;
  });

  const changeSize = () => {
    let btnPlus = document.getElementsByTagName("button")[0];

    let btnMinus = document.getElementsByTagName("button")[1];

    var px = 17;

    btnPlus.addEventListener("click", () => {
      text = document.getElementsByTagName("p");

      px++;

      for (var i = 0; i < text.length; i++) {
        text[i].setAttribute("style", "font-size: " + px + "px;");
      }

      if (px >= 30) {
        text[i].setAttribute("style", "font-size: 15");
      }
    });

    btnMinus.addEventListener("click", () => {
      text = document.getElementsByTagName("p");

      px--;

      for (var i = 0; i < text.length; i++) {
        text[i].setAttribute("style", "font-size: " + px + "px;");
      }
    });
  };

  changeSize();
});
