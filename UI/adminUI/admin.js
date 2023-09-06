var brand = document.querySelector("#FormControlSelect0").value;
var model = document.querySelector("#FormControlInput0").value;
var power = document.querySelector("#FormControlSelect1").value;
var year = document.querySelector("#FormControlSelect2").value;
var mileage = document.querySelector("#FormControlInput1").value;
var sellPrice = document.querySelector("#FormControlInput2").value;
var description = document.querySelector("#exampleFormControlTextarea1").value;
let image1 = document.querySelector("#FormControlDownload1").value;

function Car(
  marque,
  modele,
  energie,
  annee,
  kilometrage,
  prix,
  description,
  image
) {
  this.marque = marque;
  this.modele = modele;
  this.energie = energie;
  this.annee = annee;
  this.kilometrage = kilometrage;
  this.prix = prix;
  this.description = description;
  this.image = image;
}

let newCar = new Car(
  brand,
  model,
  power,
  year,
  mileage,
  sellPrice,
  description,
  image1
);

const previewDiv = document.querySelector(".previewDiv");
const annType = document.querySelector(".annType");
const annDescription = document.querySelector(".annDescription");
const annPower = document.querySelector(".annPower");
const annKm = document.querySelector(".annKm");
const annYear = document.querySelector(".annYear");
const annPrice = document.querySelector(".annPrice");
const viewButton = document.querySelector("#view");

viewButton.addEventListener("click", () => {
  annType.innerHTML = `${brand} ${model}`;
});
