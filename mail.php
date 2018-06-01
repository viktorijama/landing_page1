<?php

      $error="";
      $success="";

    if ($_POST) {

      $vardas=$_POST['vardas'];
      $telefonas=$_POST['telefonas'];
      $pastas=$_POST['pastas'];

      if (strlen($vardas) < 3 ) {
        $error.="<div class='alert alert-danger'>Vardas įvestas neteisingai! </div>";
      }

      if (strlen($telefonas) < 6 ) {
        $error.="<div class='alert alert-danger'>Telefono numeris įvestas neteisingai!</div>";
      }

      if (strlen($pastas) < 3 ) {
        $error.="<div class='alert alert-danger'>El. pašto adresas įvestas neteisingai!</div>";
      }

      if (empty($error)) {
        $message="Vartotojas $vardas, telefono numeris: $telefonas, emeilas: $pastas, nori, kad su juo susisiektumėt.";
        // mail("viktorija.maciune@gmail.com", "Vartotojas paliko savo duomenis svetainėje", $message);
        $success.="<div class='alert alert-success'>Jūsų užklausa sėkmingai išsiųsta.</div>";
      } else {
      }
    }
?>
