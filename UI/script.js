const rememberDiv = document.querySelector(".remember");
const forgetDiv = document.querySelector(".forget");
const form = document.querySelector("form");
const identInput = document.querySelector("#identifiant");
const submitBtn = document.querySelector("#button-submit");
const forgetBtn = document.querySelector("#button-disconnect");

const link = document.querySelector("#connect-link");
const link1 = document.querySelector("#connect-link1");
const welcomeText = document.querySelector(".forget-text");

form.addEventListener("submit", function (e) {
  e.preventDefault();
});

submitBtn.addEventListener("click", function () {
  localStorage.setItem("name", identInput.value);
  nameDisplayCheck();
});

forgetBtn.addEventListener("click", function () {
  localStorage.removeItem("name");
  nameDisplayCheck();
});

link.addEventListener("click", function () {
  localStorage.removeItem("name");
  nameDisplayCheck();
});

function nameDisplayCheck() {
  if (localStorage.getItem("name")) {
    let name = localStorage.getItem("name");
    link.textContent = "DECONNECTION";
    link.style.color = "rgb(201, 203, 204)";
    welcomeText.textContent =
      "Bienvenue " + name + "!\nVous etes actuellement connecté.";

    forgetDiv.style.display = "block";
    rememberDiv.style.display = "none";
  } else {
    link.textContent = "CONNECTION";
    link.style.color = "rgb(201, 203, 204)";
    forgetDiv.style.display = "none";
    rememberDiv.style.display = "block";
  }
}
document.body.onload = nameDisplayCheck;
