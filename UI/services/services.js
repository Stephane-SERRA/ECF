const link2 = document.querySelector("#connect-link2");

function nameDisplayCheck() {
  if (localStorage.getItem("name")) {
    let name = localStorage.getItem("name");
    link2.textContent = "DECONNECTION";
    link.style.color = "white";
  } else {
    link2.textContent = "CONNECTION";
    link.style.color = "rgb(201, 203, 204)";
  }
}
document.body.onload = nameDisplayCheck;
