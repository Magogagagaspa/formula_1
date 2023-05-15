<?php
    session_start();
    
    require_once('../file_php/dati_connessione.php');

    if(isset($_SESSION["email"]))
    {
        $email = $_SESSION["email"];
    }
    if(isset($_SESSION["accesso"])) $accesso = $_SESSION["accesso"]; else $acceso = false;
?>

<!DOCTYPE html>
<html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../stile.css">
      <link rel="icon" type="img/png" href="../immagini/f11.png">
      <title>CLASSIFICA</title>
  </head>

  <body class="classifica">
    <div>
    <?php
      include('../script_header_footer/script_header.php')
    ?>


      <menu>
        <div>
          <h1 id="titoloclassifica">CLASSIFICA PILOTI 2023</h1>
        </div>
        <div class="tabella">
          <table class="tab"; cellspacing ="0"; cellpadding ="0";>
            <tr>
              <td id="nomigs">PILOTI</td>
              <td id="gp"><img id="bandiera" src="../immagini/bahrain.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/arabia.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/australia.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/china.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/azerbaijan.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/USA.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/italia.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/monaco.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/spagna.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/canada.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/Austria.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/uk.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/ungheria.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/belgio.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/Olanda.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/italia.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/singapore.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/giappone.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/qatar.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/USA.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/messico.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/brasile.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/USA.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/abudhabi.png"></td>  
              <td id="tot">TOT</td>
            </tr>
            <tr>
              <td id="nomigc">VERSTAPPEN</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
            </tr>
            <tr>
              <td id="nomigs">PEREZ</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>     
            </tr>
            <tr>
              <td id="nomigc">LECLERC</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
            </tr>
            <tr>
              <td id="nomigs">SAINZ</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>      
            </tr>
            <tr>
              <td id="nomigc">HAMILTON</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
            </tr>
            <tr>
              <td id="nomigs">RUSSEL</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>      
            </tr>
            <tr>
              <td id="nomigc">NORRIS</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
            </tr>
            <tr>
              <td id="nomigs">PIASTRI</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>      
            </tr>
            <tr>
              <td id="nomigc">GASLY</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
            </tr>
            <tr>
              <td id="nomigs">OCON</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>      
            </tr>
            <tr>
              <td id="nomigc">ALONSO</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
            </tr>
            <tr>
              <td id="nomigs">STROLL</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>      
            </tr>
            <tr>
              <td id="nomigc">BOTTAS</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>  
            </tr>
            <tr>
              <td id="nomigs">ZHOU</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>      
            </tr>
            <tr>
              <td id="nomigc">MAGNUSSEN</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
            </tr>
            <tr>
              <td id="nomigs">HULKENBERG</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>      
            </tr>
            <tr>
              <td id="nomigc">TSUNODA</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
            </tr>
            <tr>
              <td id="nomigs">DE VRIES</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>      
            </tr>
            <tr>
              <td id="nomigc">ALBON</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>
              <td id="puntig">0</td>           
            </tr>
            <tr>
              <td id="nomigs">SARGEANT</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">0</td>      
            </tr>
            
            </table>
        </div>
      </menu>

      <script src="../script_header_footer/script_footer.js"></script>

    </div>
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