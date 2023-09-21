const link2 = document.querySelector("#connect-link2");
const modifyBtn1 = document.querySelector("#modify-schedules-btn1");
const modifyBtn2 = document.querySelector("#modify-services-btn");

function nameDisplayCheck() {
  if (localStorage.getItem("name")) {
    let name = localStorage.getItem("name");
    link2.textContent = "DECONNEXION";
    link2.style.color = "white";
  } else {
    link2.textContent = "CONNEXION";
    link2.style.color = "white";
    modifyBtn1.style.display = "none";
    modifyBtn2.style.display = "none";
  }
}
document.body.onload = nameDisplayCheck;
