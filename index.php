<?php
      require_once('mail.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Eurometra.lt</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
      <div class="container-fluid">
        <header class= "row ">
          <div class="col-xl-2 col-lg-0"></div>
          <div class="logo col-xl-4 col-lg-6 col-md-6 ">
            <img src="img/logo.png" alt="Logotipas">
          </div>
          <div class="header-phone col-xl-4 col-lg-4 col-md-6 ">
            <span>Susisiekite +370 000 00000</span>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-0"></div>
        </header>
      </div>
      <div class="home-page-back">
        <div class="container">
          <div class="row home-page">
          <div class="col-xl-6 col-lg-6 col-md-4 d-none d-md-block "></div>
          <form class="col-xl-6 col-lg-6 col-md-8 col-sm-8" action="" method="post">
            <h1>Plieninės dailylentės <br>
               <strong>SIDING</strong></h1>
            <p class="form-text">ilgaamžis, nereikalaujantis priežiūros</p>
            <p class="form-text mb-4">sprendimas fasadams</p>
            <!-- echo $success;
            echo $error;  -->
            <label>Vardas</label><br>
            <input class='rounded shadow-none' type="text" name="vardas" value=""><br>
            <label>El. paštas </label><br>
            <input class='rounded' type="text" name="pastas" value=""><br>
            <label>Tel. numeris</label><br>
            <input class='rounded' type="text" name="telefonas" value=""><br>
            <button class='btn btn-outline-light' type="submit" name="button">Siųsti</button>
          </form>
        </div>
      </div>
    </div>
      <div class="main-back">
        <div class="container main">

          <div class="row">
            <article class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 text-1">
              <h2>Plieninių dailylenčių privalumai</h2>
              <ul>
                <li>Neblunka, nereikia dažyti ar kitaip prižiūrėti, galima plauti vandens srove.</li>
                <li>Natūralios medienos imitacija, nesikartojantis raštas.</li>
                <li>Dailylentės atsparios ugniai.</li>
                <li>Mažas dangos svoris neapkraunantis kitų namo konstukcijų.</li>
                <li>Dailylentės atsparios oro sąlygų kaitai, spalvos pokyčiams, deformacijai bei korozijai.</li>
                <li>Plačios panaudojimo galimybės (sienoms, malkinėms, pastogėms, džiovykloms, tvoroms, pavėsinėms ir t.t.).</li>
                <li>Atsparios daugeliui gyvųjų organizmų (grybeliams, bakterijoms, vabzdžiams, parazitams ir t.t.).</li>
                <li>Atsparios ekstremalioms temperatūroms.</li>
              </ul>
            </article>
            <div class="foto-1 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12"></div>
          </div>

          <div class="row">
            <div class="foto-2 col-xl-6 col-lg-6 d-none d-lg-block"></div>
            <article class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 text-2">
              <h2>Plieninių dailylenčių montavimo privalumai</h2>
              <ul>
                <li>Itin paprastas montavimas tvirtinant varžtais.</li>
                <li>Dailylentės ilgis paruošiamas pagal Jūsų poreikį.</li>
                <li>Esant poreikiui sumontuota dailylentė gali būti išrenkama ir pakeičiama kita.</li>
                <li>Ventiliuojamiems fasadams dailylentes galime perforuoti.</li>
              </ul>
            </article>
            <div class="foto-2 col-md-12 col-sm-12 col-xs-12 d-lg-none"></div>
          </div>

          <div class="row">
            <article class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 text-3">
              <h2>Paslaugos</h2>
              <ul>
                <li>Dangą pagaminsime per 48 val.</li>
                <li>Dailylentės gali būti perforuotos!!!</li>
                <li>Lenteles galime pateikti padengtas apsaugine plėvele.</li>
                <li>Pas mus galite nusipirkti viską ko gali prireikti dailylenčių montavimui.</li>
                <li>Pagal Jūsų brėžinį apskaičiuosime optimaliausią dailylenčių kiekį.</li>
                <li>Pateiksime montavimo brėžinį.</li>
              </ul>
            </article>
            <div class="foto-3 col-xl-6 col-lg-6 d-none d-lg-block ">
              <img class="img-3"src="img/service3.png" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="footer-back">
        <div class="container footer">
          <footer class="row ">
            <div class="left-side col-xl-6 col-lg-6 col-md-12">
              <p>Suteiksime <span>15 metų</span> gamintojo garantiją, spalvai ir nublukimui.</p>
            </div>
            <div class="right-side col-xl-6 col-lg-6 col-md-12">
              <h3>Kreipkitės</h3>
              <p class='footer-adresas'>UAB "ĮMONĖ"<br>
              Pelkių g. 00, Panevėžys, Lietuva</p>
              <p class='footer-contacts'>Tel.: +370 000 00000 <br>
              El. paštas: info@imone.lt</p>
            </div>
          </footer>
        </div>
      </div>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>
