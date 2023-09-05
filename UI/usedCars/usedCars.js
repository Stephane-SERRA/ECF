const link3 = document.querySelector("#connect-link3");
const createCard = document.querySelector(".create-card");
const deleteCard = document.querySelector(".delete-card");
let checkConnect;

function nameDisplayCheck() {
  if (localStorage.getItem("name")) {
    let name = localStorage.getItem("name");
    link3.textContent = "DECONNECTION";
    link3.style.color = "#fafafa";
  } else {
    link3.textContent = "CONNECTION";
    link3.style.color = "white";
    createCard.style.display = "none";
    deleteCard.style.display = "none";
  }
}

document.body.onload = nameDisplayCheck;
