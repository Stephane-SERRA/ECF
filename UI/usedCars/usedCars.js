const link3 = document.querySelector("#connect-link3");
const deleteCard = document.querySelector(".delete-card-link");

function nameDisplayCheck() {
  if (localStorage.getItem("name")) {
    let name = localStorage.getItem("name");
    link3.textContent = "DECONNECTION";
    link3.style.color = "yellow";
    deleteCard.style.display = "inline-block";
  } else {
    link3.textContent = "CONNECTION";
    link3.style.color = "white";
    deleteCard.style.display = "none";
  }
}
document.body.onload = nameDisplayCheck;
