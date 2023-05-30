<?php
    session_start();
    
    require_once('../file_php/dati_connessione.php');

    if(isset($_SESSION["email"]))
    {
        $email = $_SESSION["email"];
    }
    if(isset($_SESSION["accesso"])) $accesso = $_SESSION["accesso"]; else $acceso = false;
    if(isset($_SESSION["nome_squadra"])) $nome_squadra = $_SESSION["nome_squadra"];
    if(isset($_SESSION["squadra"])) $squadra = $_SESSION["squadra"];
?>

<!DOCTYPE html>
<html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../stile.css">
      <link rel="icon" type="img/png" href="../immagini/f11.png">
      <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
      <title>FANTASY</title>
  </head>
     <body>
        <?php
            include('../script_header_footer/script_header.php')
        ?>
            <?php

                $connessione = new mysqli("localhost", "root", "", "formula_1");
                if($connessione->connect_error)
                {
                    die("<p>Connessione al server non riuscita: ".$connessione->connect_error."</p>");
                }

                $sql = "SELECT nome_sq FROM squadra JOIN utente ON squadra.email_utente = utente.email
                        WHERE utente.email = '$email'";
                $sql2 = "SELECT pilota FROM piloti JOIN appartiene ON appartiene.cod_pilota = piloti.cod_pilota
                JOIN squadra ON squadra.cod_sq = appartiene.cod_sq
                JOIN utene ON utene.email = squadra.email_utente";

                $ris = $connessione->query($sql);

                if($ris->num_rows === 1)
                {
                    foreach($ris as $riga)
                    {
                        echo'<h2 id="titolosaquadraf"> '.$riga["nome_sq"]'</h2>
                        
                        <div class="contieni_squadraf"> 
                            <div class="contieni_pilotaf">
                                '.$riga["pilota1"]'
                            </div>
                        </div>
                        ';
                    }
                }
            ?>
        
       

    </body>
</html>