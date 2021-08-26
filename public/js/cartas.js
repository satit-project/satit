console.log("cartas loaded");

/// TODO: RENDERCARD

const btn = document.querySelector(".btn-cartas");
const cartasContainer = document.querySelector(".container-cartas");
const getJSON = function (url, errMsg = "Something went worng") {
  return fetch(url).then((response) => {
    if (!response.ok) throw new Error(`${errMsg}(${response.status})`);
  });
};

const getCartas = new Promise(function (resolve, reject) {
  fetch("http://127.0.0.1/satit/cartatrabajo/listaCartas/").catch((err) => {
    (err) => alert(`${err}`);
  });
});

btn.addEventListener("click", function () {
  getCartas();
});

getCartas;
