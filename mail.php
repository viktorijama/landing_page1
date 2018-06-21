<?php

      $error="";
      $success="";

    if ($_POST) {

      $vardas=$_POST['vardas'];
      $telefonas=$_POST['telefonas'];
      $pastas=$_POST['pastas'];
      $zinute=$_POST['zinute'];


      if (empty($pastas)) {
        $error.="<div class='alert alert-danger'>El. pašto adresas būtinas!</div>";
      } else {
            if (!filter_var($pastas, FILTER_VALIDATE_EMAIL)) {
              $error = "<div class='alert alert-danger'>El. pašto adresas neteisingas!</div>";
              }
            }

      if (empty($error)) {
        $message="Svetainės lankytojas/a: $vardas, kurio telefono numeris: $telefonas, e-mail: $pastas, paliko žinutę: $zinute .";
        mail("viktorija@orca.lt", "Lankytojas paliko savo duomenis svetainėje", $message);
        $success.="<div class='alert alert-success'>Jūsų užklausa sėkmingai išsiųsta.</div>";
      } else {

      }
    }
?>
