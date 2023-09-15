const link3 = document.querySelector("#connect-link3");
const createCard = document.querySelector(".create-card");
const deleteCard = document.querySelector(".delete-card");

function nameDisplayCheck() {
  if (localStorage.getItem("name")) {
    let name = localStorage.getItem("name");
    link3.textContent = "DECONNECTION";
    link3.style.color = "#fafafa";
  } else {
    link3.textContent = "CONNECTION";
    link3.style.color = "#fafafa";
    createCard.style.display = "none";
    deleteCard.style.display = "none";
  }
}

document.body.onload = nameDisplayCheck;

/*Imput-Range-Filter*/

const rangeResults = document.querySelectorAll(".range-result");

rangeResults.forEach(function (rangeResult) {
  const rangeInput = document.querySelector("#" + rangeResult.dataset.input);

  if (rangeInput) {
    rangeResult.innerHTML = rangeInput.value;

    rangeInput.addEventListener("input", function () {
      rangeResult.innerHTML = rangeInput.value;
    });
  }
});

/*Form-validation

let userName = document.querySelector("#modal-name");
let phoneNumber = document.querySelector("#modal-phone");
let email = document.querySelector("#modal-email");
let message = document.querySelector("#message-text");
let error = document.querySelector("#error");
let sendButton = document.querySelector("#modal-sendBtn");
let modalConfirm = document.querySelector("#contactModal2");

var regexEmail = /^([0-9a-zA-Z].*?@([0-9a-zA-Z].*\.\w{2,4}))$/;
var regexPhone = /^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$/;

userName.addEventListener("input", (event) => {
  if ((userName.innerText = "")) {
    error.innerText = "Vous devez entrer un nom";
  } else {
    error.innerText = "";
  }
});

phoneNumber.addEventListener("input", (event) => {
  if (!regexEmail.test(event.target.value)) {
    error.innerText = "Le format du numéro est incorrect";
  } else {
    error.innerText = "";
  }
});

email.addEventListener("input", (event) => {
  if (!regexEmail.test(event.target.value)) {
    error.innerText = "Le format de l'email est incorrect";
  } else {
    error.innerText = "";
  }
});

sendButton.addEventListener("click", (event) => {
  if (error.innerText !== "") {
    event.preventDefault();
    sendButton.data - bs - target;
    alert("Le formulaire est incomplet");
  }
});*/
