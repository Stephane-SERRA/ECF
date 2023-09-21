<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=
    , initial-scale=1.0" />
  <link rel="stylesheet" href="admin.css" />
  <title>Garage Parrot - Créer une annonce</title>
  <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Sintony&display=swap" href="https://fonts.googleapis.com/css2?family=Courgette&family=Nunito&family=Sintony&display=swap" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
</head>

<body>
  <!--NAVBAR-->

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <div class="d-flex align-items-center">
        <a class="navbar-brand" href="#">
          <img src="../img/logo_garage.jpg" alt="Logo Garage Parrot" title="Garage Parrot" />
        </a>

        <!--burger menu button-->

        <button class="navbar-toggler ms-auto custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span>
            <svg xmlns="#" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewbox="0 0 16 16">
              <path d="#"></path>
            </svg>
          </span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../home/index.html" style="color: white">
              ACCUEIL
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../services/services.html" style="color: white">
              SERVICES
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../usedCars/usedCars.html" style="color: white">
              OCCASIONS
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../form/form.html" style="color: white" id="connect-link1">
              DECONNEXION
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main>
    <div class="container-fluid p-3 text-center">
      <h2>Créer une nouvelle annonce</h2>
    </div>
    <div class="container-fluid">
      <div class="row justify-content-around">
        <div class="col-12 col-md-4 text-center" id="createCard-form">
          <form action="admin.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="FormControlSelect0">Marque</label>
              <select class="form-control" id="FormControlSelect0" name="FormControlSelect0">
                <option></option>
                <option>BMW</option>
                <option>Citroën</option>
                <option>Honda</option>
                <option>Knight Industries</option>
                <option>Mazda</option>
                <option>Mercedes</option>
                <option>Nissan</option>
                <option>Opel</option>
                <option>Peugeot</option>
                <option>Renault</option>
                <option>Skôda</option>
                <option>Smart</option>
                <option>Tesla</option>
                <option>Toyota</option>
                <option>VolksWagen</option>
              </select>
            </div>
            <div class="form-group">
              <label for="FormControlInput0">Modèle</label>
              <input type="text" class="form-control" id="FormControlInput0" name="FormControlinput0" placeholder="Saisissez un modèle" />
            </div>
            <div class="form-group">
              <label for="FormControlSelect1">Energie</label>
              <select class="form-control" id="FormControlSelect1" name="FormControlSelect1">
                <option></option>
                <option>Essence SP</option>
                <option>Diesel</option>
                <option>GPL</option>
                <option>Hybride</option>
                <option>Electrique</option>
              </select>
            </div>
            <div class="form-group">
              <label for="FormControlSelect2">Année</label>
              <select class="form-control" id="FormControlSelect2" name="FormControlSelect2">
                <option></option>
                <option>2022</option>
                <option>2021</option>
                <option>2020</option>
                <option>2019</option>
                <option>2018</option>
                <option>2017</option>
                <option>2016</option>
                <option>2015</option>
                <option>2014</option>
                <option>2013</option>
                <option>2012</option>
                <option>2011</option>
                <option>2010</option>
                <option>2009</option>
                <option>2008</option>
                <option>2007</option>
                <option>2006</option>
                <option>2005</option>
                <option>2004</option>
                <option>2003</option>
              </select>
            </div>
            <div class="form-group">
              <label for="FormControlInput1">Kilométrage</label>
              <input type="text" class="form-control" id="FormControlInput1" name="FormControlInput1" placeholder="Entrez un kilométrage" />
            </div>
            <div class="form-group">
              <label for="FormControlInput2">Prix de vente</label>
              <input type="text" class="form-control" id="FormControlInput2" name="FormControlInput2" placeholder="Entrez un prix" />
            </div>
            <div class="form-group">
              <label for="FormControlTextarea1">Description</label>
              <textarea class="form-control" id="FormControlTextarea1" name="FormControlTextarea1" rows="3" placeholder="Entrez une description du véhicule"></textarea>
            </div>
            <div class="form-group mt-3">
              <label for="FormControlDownload1">Image 1</label>
              <input type="file" id="FormControlDownload1" name="FormControlDownload1" accept="image/png, image/jpeg" />
            </div>
            <div class="form-group mt-3">
              <label for="FormControlDownload2">Image 2</label>
              <input type="file" id="FormControlDownload2" name="FormControlDownload2" accept="image/png, image/jpeg" />
            </div>
            <div class="form-group mt-3">
              <label for="FormControlDownload3">Image 3</label>
              <input type="file" id="FormControlDownload3" name="FormControlDownload3" accept="image/png, image/jpeg" />
            </div>

            <button type="submit" class="btn border-0" id="view">Aperçu</button>
          </form>
        </div>

        <div class="col-12 col-md-7 mt-2" id="preview">
          <div class="previewDiv" id="previewDiv">
            <div class="container text-center p-3">
              <?php
              require '../../Data/connexion.php';

              if (isset($_FILES['FormControlDownload1'])) {
                $tmpName = $_FILES['FormControlDownload1']['tmp_name'];
                $name = $_FILES['FormControlDownload1']['name'];
                $size = $_FILES['FormControlDownload1']['size'];
                $error = $_FILES['FormControlDownload1']['error'];
              }

              if (isset($_FILES['FormControlDownload2'])) {
                $tmpName2 = $_FILES['FormControlDownload2']['tmp_name'];
                $name2 = $_FILES['FormControlDownload2']['name'];
                $size2 = $_FILES['FormControlDownload2']['size'];
                $error2 = $_FILES['FormControlDownload2']['error'];
              }

              if (isset($_FILES['FormControlDownload3'])) {
                $tmpName3 = $_FILES['FormControlDownload3']['tmp_name'];
                $name3 = $_FILES['FormControlDownload3']['name'];
                $size3 = $_FILES['FormControlDownload3']['size'];
                $error3 = $_FILES['FormControlDownload3']['error'];
              }

              $tabExtension = explode('.', $name);
              $tabExtension2 = explode('.', $name2);
              $tabExtension3 = explode('.', $name3);
              $extension = strtolower(end($tabExtension));
              $extension2 = strtolower(end($tabExtension2));
              $extension3 = strtolower(end($tabExtension3));
              $extensions = ['jpg', 'png', 'jpeg', 'gif'];
              $maxSize = 400000;

              if (in_array($extension, $extensions) && $size <= $maxSize && $error == 0) {
                $uniqueName = uniqid('', true);
                $file = $uniqueName . "." . $extension;
                move_uploaded_file($tmpName, './upload/' . $file);
              } else {
                echo "La taille ou l'extension du fichier 1 est refusée ou le fichier est manquant</br>";
              }

              if (in_array($extension2, $extensions) && $size <= $maxSize && $error == 0) {
                $uniqueName = uniqid('', true);
                $file2 = $uniqueName . "." . $extension2;
                move_uploaded_file($tmpName2, './upload/' . $file2);
              } else {
                echo "La taille ou l'extension du fichier 2 est refusée ou le fichier est manquant</br>";
              }

              if (in_array($extension3, $extensions) && $size <= $maxSize && $error == 0) {
                $uniqueName = uniqid('', true);
                $file3 = $uniqueName . "." . $extension3;
                move_uploaded_file($tmpName3, './upload/' . $file3);
              } else {
                echo "La taille ou l'extension du fichier 3 est refusée ou le fichier est manquant</br>";
              }
              ?>
            </div>
            <div class="row justify-content-around mb-4" id="pictures">
              <div class="col-3 text-center" id="picture1">
                <?php
                require './controlForm.php';
                if ($formComplete == true) {
                  echo "<img src='./upload/" . $file . "'width='200px'>";
                } else {
                  echo "Impossible d'afficher l'image";
                }
                ?>
              </div>
              <div class="col-3 text-center" id="picture2">
                <?php
                require './controlForm.php';
                if ($formComplete == true) {
                  echo "<img src='./upload/" . $file2 . "'width='200px'>";
                } else {
                  echo "Impossible d'afficher l'image";
                }
                ?>
              </div>
              <div class="col-3 text-center" id="picture3">
                <?php
                require './controlForm.php';
                if ($formComplete == true) {
                  echo "<img src='./upload/" . $file3 . "'width='200px'>";
                } else {
                  echo "Impossible d'afficher l'image";
                }
                ?>
              </div>
            </div>
            <h4 class="annType">
              <?php
              require './controlForm.php';
              if ($formComplete == true) {
                echo "$brand $model";
              } else {
                echo 'Non renseigné';
              };
              ?>
            </h4>
            <p class="annDescription">
              <?php
              require './controlForm.php';
              if ($formComplete == true) {
                echo "$description";
              } else {
                echo 'Pas de description';
              }
              ?>
            </p>
            <div class="container justify-content-around" id="annItems-cont2">
              <p class="annPower">
                <?php
                require './controlForm.php';
                if ($formComplete == true) {
                  echo "Energie: $power";
                } else {
                  echo 'Energie : N/C';
                }
                ?>
              </p>
              <p class="annKm">
                <?php
                require './controlForm.php';
                if ($formComplete == true) {
                  echo "Kilométrage: $mileage km";
                } else {
                  echo 'Kilométrage: N/C';
                }
                ?>
              </p>
              <p class="annYear">
                <?php
                require './controlForm.php';
                if ($formComplete == true) {
                  echo "Année: $year";
                } else {
                  echo 'Année: N/C';
                }
                ?>
              </p>
              <p class="annPrice">
                <?php
                require './controlForm.php';
                if ($formComplete == true) {
                  echo "Prix: $price";
                } else {
                  echo 'Prix: N/C';
                }
                ?>
              </p>
            </div>
            <div class="message bg-dark text-center text-light">
              <?php
              //Saving data...
              require '../../Data/connexion.php';
              require './controlForm.php';

              if ($formComplete == true) {
                $saveUcData = "INSERT INTO usedcars (`brand`, `model`, `power`, `ye4r`, `mileage`, `d3scription`, `price`, `picture1`, `picture2`, `picture3`)
                VALUES('$brand', '$model', '$power', '$year', '$mileage', '$description', '$price', '$file', '$file2', '$file3')";
                $sv = $db->prepare($saveUcData);
              };

              if (isset($_POST['publish-btn'])) {
                $sv->execute();
                echo 'Données sauvegardées';
              } else {
                echo 'Echec de la sauvegarde';
              };

              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid text-center mb-3">
        <form method="POST">
          <button class="btn border-0" type="submit" id="publish-btn" name="publish-btn">Publier</button>
        </form>
      </div>
  </main>

  <script src="admin.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>