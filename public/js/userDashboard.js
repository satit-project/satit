console.log("UserDashboard.js is connected");

const cardContainer = document.querySelector(".main");
let topNav = document.getElementById("topNav");

let Card = {
  title: "",
  description: "",
  links: [],
};

const arrayCards = [];

arrayCards.push([
  {
    title: "Solicitar carta2",
    description: "Apareceran los datos de esta pantalla",
    links: ["#cartaDeTrabajo"],
  },
  {
    title: "Solicitar carta3",
    description: "Apareceran los datos de esta pantalla 2",
    links: ["#cartaDeTrabajo2"],
  },
]);

// TEST: VISUALIZATION WORKS
///

const renderCard = function (arr) {
  let i = 0;
  const [card] = arr;
  let arrLenght = arr.length;

  while (i <= arrLenght) {
    const html = `
    <div class="card col-12">
      <div class="card-body">
        <h5 class="card-title">${card[i].title}</h5>
        <h6 class="card-subtitle mb-2 text-muted">${card[i].description}</h6>
      </div>
    <button type="button" class="btn btn-primary btn col-3" data-toggle="modal" data-target="${card[i].links}">
        Solicitar
      </button>
      
      
      `;
    cardContainer.insertAdjacentHTML("beforeend", html);
    i++;
  }
};
///

renderCard(arrayCards);
