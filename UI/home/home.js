const link1 = document.querySelector("#connect-link1");
const modifyBtn3 = document.querySelector("#modify-schedules-btn2");
const deleteReview = document.querySelector("#button-deleteReview");
const deleteCardLink16 = document.querySelector("#deleteCard-link16");
const deleteCardLink17 = document.querySelector("#deleteCard-link17");
const deleteCardLink18 = document.querySelector("#deleteCard-link18");
const deleteCardLink19 = document.querySelector("#deleteCard-link19");
const deleteCardLink20 = document.querySelector("#deleteCard-link20");

function nameDisplayCheck() {
  if (localStorage.getItem("name")) {
    let name = localStorage.getItem("name");
    link1.textContent = "DECONNEXION";
    link1.style.color = "white";
  } else {
    link1.textContent = "CONNEXION";
    link1.style.color = "white";
    modifyBtn3.style.display = "none";
    deleteReview.style.display = "none";
    deleteCardLink16.style.display = "none";
    deleteCardLink17.style.display = "none";
    deleteCardLink18.style.display = "none";
    deleteCardLink19.style.display = "none";
    deleteCardLink20.style.display = "none";
  }
}
document.body.onload = nameDisplayCheck;
