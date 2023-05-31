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
      <title>LA TUA SQUADRA</title>
  </head>
     <body>
        <?php
            include('../script_header_footer/script_header_accesso.php')
        ?>
            <?php
                $connessione = new mysqli("localhost", "root", "", "formula_1");
                if($connessione->connect_error)
                {
                    die("<p>Connessione al server non riuscita: ".$connessione->connect_error."</p>");
                }
              

                $sql2 ="SELECT nome_sq FROM squadra WHERE squadra.email_utente = '$email'";

                $ris = $connessione->query($sql2);

                $row = $ris->fetch_assoc();
              

                echo '
                    <h1 id="titolazzone"> LA TUA SQUADRA </h1>
                    <h2 id="titolosquadraf"> '.$row["nome_sq"].' </h2>    
                        <div class="contieni_squadraf">
                ';

                $sql = "SELECT nome, cognome, foto, piloti.cod_pilota, team FROM piloti 
                JOIN appartiene ON appartiene.cod_pilota = piloti.cod_pilota
                JOIN squadra ON squadra.cod_sq = appartiene.cod_squadra
                WHERE squadra.email_utente = '$email'
                ";

                $ris2 = $connessione->query($sql);

                if($ris2)
                {
                   
                    while($row = $ris2->fetch_assoc())
                    {
                       $infop[] = $row;
                    }
                }
                require_once("../file_php/query.php");

                for ($i=0; $i < 5; $i++) { 
                    $y = $i+1;
                    echo'
                        <div class="contienipilotaf">
                            <img src = "'.$infop[$i]["foto"].'" id="fotopf">
                            <div class ="infopf">
                                <div class="nomef">PILOTA '.$y.'</div>
                                <div class="nomef">NOME: '.$infop[$i]["nome"].'</div>
                                <div class="nomef">COGNOME: '.$infop[$i]["cognome"].'</div>
                                <div class="nomef">TEAM: '.$infop[$i]["team"].'</div>
                            </div>
                        </div>
                    ';
                }

                echo'</div>
                
                    <div class="modificasquadra"><button><a href="modifica_squadra.php"> MODIFICA LA SQUADRA </a></button></div>

                ';


            
            ?>
        

       
        <script src="../script_header_footer/script_footer.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){

        $(".icon_bar").click(function(e){

            $(".menu").toggleClass('is-open');
            
              

            e.preventDefault();

        });

    });
</script>
    </body>
</html>