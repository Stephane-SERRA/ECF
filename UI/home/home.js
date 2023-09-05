const link1 = document.querySelector("#connect-link1");

function nameDisplayCheck() {
  if (localStorage.getItem("name")) {
    let name = localStorage.getItem("name");
    link1.textContent = "DECONNECTION";
    link.style.color = "yellow";
  } else {
    link1.textContent = "CONNECTION";
    link.style.color = "rgb(201, 203, 204)";
  }
}
document.body.onload = nameDisplayCheck;
