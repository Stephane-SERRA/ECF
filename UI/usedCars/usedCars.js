const link3 = document.querySelector("#connect-link3");
const createCard = document.querySelector(".create-card");
const deleteCard = document.querySelector(".delete-card");
const deleteCardLink1 = document.querySelector("#deleteCard-link1");
const deleteCardLink2 = document.querySelector("#deleteCard-link2");
const deleteCardLink3 = document.querySelector("#deleteCard-link3");
const deleteCardLink4 = document.querySelector("#deleteCard-link4");
const deleteCardLink5 = document.querySelector("#deleteCard-link5");
const deleteCardLink6 = document.querySelector("#deleteCard-link6");
const deleteCardLink7 = document.querySelector("#deleteCard-link7");
const deleteCardLink8 = document.querySelector("#deleteCard-link8");
const deleteCardLink9 = document.querySelector("#deleteCard-link9");
const deleteCardLink10 = document.querySelector("#deleteCard-link10");
const deleteCardLink11 = document.querySelector("#deleteCard-link11");
const deleteCardLink12 = document.querySelector("#deleteCard-link12");
const deleteCardLink13 = document.querySelector("#deleteCard-link13");
const deleteCardLink14 = document.querySelector("#deleteCard-link14");
const deleteCardLink15 = document.querySelector("#deleteCard-link15");
const modifyBtn = document.querySelector("#modify-schedules-btn");

function nameDisplayCheck() {
  if (localStorage.getItem("name")) {
    let name = localStorage.getItem("name");
    link3.textContent = "DECONNEXION";
    link3.style.color = "#fafafa";
  } else {
    link3.textContent = "CONNEXION";
    link3.style.color = "#fafafa";
    createCard.style.display = "none";
    deleteCard.style.display = "none";
    deleteCardLink1.style.display = "none";
    deleteCardLink2.style.display = "none";
    deleteCardLink3.style.display = "none";
    deleteCardLink4.style.display = "none";
    deleteCardLink5.style.display = "none";
    deleteCardLink6.style.display = "none";
    deleteCardLink7.style.display = "none";
    deleteCardLink8.style.display = "none";
    deleteCardLink9.style.display = "none";
    deleteCardLink10.style.display = "none";
    deleteCardLink11.style.display = "none";
    deleteCardLink12.style.display = "none";
    deleteCardLink13.style.display = "none";
    deleteCardLink14.style.display = "none";
    deleteCardLink15.style.display = "none";
    modifyBtn.style.display = "none";
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

/*Form-validation (UNDER CONSTRUCTION)

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
