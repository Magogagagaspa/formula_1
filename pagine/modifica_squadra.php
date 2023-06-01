<?php
    session_start();
    
    require_once('../file_php/dati_connessione.php');

    if(isset($_SESSION["email"])) $email = $_SESSION["email"];
    if(isset($_SESSION["nome_squadra"])) $nome_squadra = $_SESSION["nome_squadra"];
    if(isset($_SESSION["accesso"])) {$accesso = $_SESSION["accesso"];} else{$acceso = false;}
    if(isset($_SESSION["piloti"])) $pilot = $_SESSION["piloti"];

  
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
      <title>MODIFICA LA TUA SQUADRA</title>
</head>
    <body>
    <?php 
                echo' 
                    <div class="contenitore_fantasy_2">
                    <div class="contieni_titolof">
                        <h2 id="titolino">MODIFICA LA TUA </h2><h2 id="tit_sq">SQUADRA</h2>
                    </div>
                    <div class="contieni_titolof">
                        <h2 id="titolino">SELEZIONA I</h2><h2 id="tit_sq">5 PILOTI</h2><h2 id="titolino">CHE VUOI</h2>
                    </div>
    
                    <div class="contenitore_crea">
                    <form action="'.$_SERVER["PHP_SELF"].'" method="POST" id="form_crea">
                    <div class="contieni_input_piloti">';
                    require_once("../file_php/query.php");
                    for ($i=0; $i < 20; $i++)
                    { 
                        if (isset($infoPiloti[$i]))
                         {
                        echo '
                            <div class="contieni_input">
                                <div class="contieni_immaginef"><img src="'.$infoPiloti[$i]["foto"].'" alt="" class="fotopilotaform"></div>
                                <div class="contieni_label">
                                    <label for="pilota['.$i.']" id="label_crea"> '.$infoPiloti[$i]["nome"] . " " . $infoPiloti[$i]["cognome"] .' </label> <input type="checkbox" name="pilota['.$i.']" value="pilota['.$i.']" id="input_crea">
                                 
                            </div>
                        </div>
                        ';
                        }
                    }
                    
                    echo'
                    </div>
                        <input type="submit" value="MODIFICA" id="bottone_crea">
                    </form>   
                     </div>
                     </div>
                    ';

                    $pilotiSelezionati = array();
                    for ($i=0; $i < 20; $i++) { 
                        if(isset($_POST["pilota"][$i]))
                        {                           
                            $pilotiSelezionati[] = $_POST["pilota"][$i];
                            
                        }
                    }
                if(count($pilotiSelezionati) === 5)
                {
                    if(isset($_POST["pilota"]))
                    {    
                        $pilot = array();
                        foreach($_POST["pilota"] as $indice => $valore)
                        {
                         $pilot[] = $infoPiloti[$indice]["cod_pilota"];
                        }
                                     
                        $mysql = "UPDATE squadra
                        JOIN appartiene ON appartiene.cod_squadra = squadra.cod_sq
                        SET pilota1 = '$pilot[0]', pilota2 = '$pilot[1]', pilota3 = '$pilot[2]', pilota4 = '$pilot[3]', pilota5 = '$pilot[4]'
                        WHERE squadra.email_utente = '$email'
                        ";
                                
                        if($connessione->query($mysql) === true)
                        {
                            $mysql3 = "SELECT cod_sq FROM squadra WHERE email_utente = '$email'";

                            $ris2 = $connessione->query($mysql3);

                            $row = $ris2->fetch_assoc();

                            $cod_squadra = $row['cod_sq'];

                            for ($i = 0; $i < 5; $i++) {
                                $pilota_id = $pilot[$i];
                                $appartiene_id = $cod_squadra * 10 + $i;
                        
                                $sql2 = "INSERT INTO appartiene (cod_ap, cod_pilota, cod_squadra) 
                                        VALUES ('$appartiene_id', '$pilota_id', '$cod_squadra')
                                        ON DUPLICATE KEY UPDATE cod_pilota = '$pilota_id'";
                                $ris4 = $connessione->query($sql2);

                            }
                            
                            if($ris4)
                            {
                                $sql5 = "UPDATE squadra
                                JOIN appartiene ON squadra.cod_sq = appartiene.cod_squadra
                                SET pilota1 = '$pilot[0]', pilota1 = '$pilot[1]', pilota1 = '$pilot[2]', pilota1 = '$pilot[3]', pilota1 = '$pilot[4]'
                                WHERE email_utente = '$email'";

                                $ris5 = $connessione->query($sql5);
                                $_SESSION["pilota"] = $pilotiSelezionati;

                                $sql6 = "DELETE FROM appartiene
                                WHERE cod_squadra = '$cod_squadra' AND cod_pilota <> '$pilot[0]' AND cod_pilota <> '$pilot[1]' AND cod_pilota <> '$pilot[2]' AND cod_pilota <> '$pilot[3]' AND cod_pilota <> '$pilot[4]'  
                                ";
                                
                                $ris6 = $connessione->query($sql6);

                             
                            }
                   }
                   echo'
                    <script>
                        window.location.href = "squadra.php";
                    </script>'; 
                  
                }   
                                
            }    
            else{
                echo'<div class="mess_errore"> Devi selezionare cinque piloti </div>';
            } 

                   
        ?>
    </body>
</html>