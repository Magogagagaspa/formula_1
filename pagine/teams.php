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
<html>

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../stile.css">
      <link rel="icon" type="img/png" href="../immagini/f11.png">
      <title>TEAMS</title>
  </head>

  <body>
    <div>
    <?php
      include('../script_header_footer/script_header.php')
    ?>
      
      <menu class="team">
        <div class="team2" id="RDB">
          <div class="logoscuderia">
            <img src="../immagini/redb.png">
          </div>
          <div class="contenitore_squadra">
            <div class="squadra">
              <h1>RED BULL RACING</h1>
              <p>ANNO FONDAZIONE:  2005</p>
              <p>SEDE:  Milton Kenyes, UK</p>
              <p>MONDIALI COSTRUTTORI:  5 </p>
              <p>TEAM PRINCIPAL:  Christian Horner</p>
              <p>PILOTI: M. Verstappen - S. Perez </p>
            </div>
          </div>
          <div class="macchina">
            <img src="../immagini/rb.png">
          </div>
        </div>

        <div class="team2" id="FRR">
          <div class="logoscuderia">
            <img src="../immagini/ferrari.png">
          </div>
          <div class="contenitore_squadra">
            <div class="squadra">
                <h1>SCUDERIA FERRARI</h1>
                <p>ANNO FONDAZIONE:  1929</p>
                <p>SEDE:  Maranello, IT</p>
                <p>MONDIALI COSTRUTTORI:  16 </p>
                <p>TEAM PRINCIPAL:  Frèdèric Vasseur</p>
                <p>PILOTI: C. Lecvlerc - C. Sainz </p>
            </div>
          </div>
          <div class="macchina">
            <img src="../immagini/fer.png">
          </div>
        </div>

        <div class="team2" id="MRC">
          <div class="logoscuderia">
            <img src="../immagini/merced.png">
          </div>
          <div class="contenitore_squadra">
            <div class="squadra">
                <h1>MERCEDES AMG F1 TEAM</h1>
                <p>ANNO FONDAZIONE:  1954</p>
                <p>SEDE:  Brackley, UK</p>
                <p>MONDIALI COSTRUTTORI:  8 </p>
                <p>TEAM PRINCIPAL:  Toto Wolf</p>
                <p>PILOTI: L. Hamilton - G. Russell </p>
            </div>
        </div>
          <div class="macchina">
            <img src="../immagini/merc.png">
          </div>
        </div>
        
        <div class="team2" id="MCL">
          <div class="logoscuderia">
            <img src="../immagini/mcla.PNG">
          </div>
          <div class="contenitore_squadra">
            <div class="squadra">
                <h1>McLAREN</h1>
                <p>ANNO FONDAZIONE:  1963</p>
                <p>SEDE:  Woking, UK</p>
                <p>MONDIALI COSTRUTTORI:  8 </p>
                <p>TEAM PRINCIPAL:  Andrea Stella</p>
                <p>PILOTI: L. Norris - O. Piastri </p>
            </div>
        </div>
          <div class="macchina">
            <img src="../immagini/mc.png">
          </div>
        </div>

        <div class="team2" id="ALP">
          <div class="logoscuderia">
            <img src="../immagini/alpine.png">
          </div>
          <div class="contenitore_squadra">
            <div class="squadra">
                <h1>ALPINE F1 TEAM</h1>
                <p>ANNO FONDAZIONE:  1977</p>
                <p>SEDE:  Enstone, UK</p>
                <p>MONDIALI COSTRUTTORI:  2 </p>
                <p>TEAM PRINCIPAL:  Otmar Szafnauer</p>
                <p>PILOTI: P. Gasly - E. Ocon </p>
            </div>
        </div>
          <div class="macchina">
            <img src="../immagini/alp.png">
          </div>
        </div>

        <div class="team2" id="ALF">
          <div class="logoscuderia">
            <img src="../immagini/alfarom.png">
          </div>
          <div class="contenitore_squadra">
            <div class="squadra">
                <h1>ALFA ROMEO RACING</h1>
                <p>ANNO FONDAZIONE:  1970</p>
                <p>SEDE:  Hinwil, CH</p>
                <p>MONDIALI COSTRUTTORI:  0 </p>
                <p>TEAM PRINCIPAL:  Alessandro Alunni Bravi</p>
                <p>PILOTI: V. Bottas - G. Zhou </p>
            </div>
        </div>
          <div class="macchina">
            <img src="../immagini/alfa.png">
          </div>
        </div>

        <div class="team2" id="AST">
          <div class="logoscuderia">
            <img src="../immagini/Amf12.png">
          </div>
          <div class="contenitore_squadra">
            <div class="squadra">
                <h1>ASTON MARTIN F1 TEAM</h1>
                <p>ANNO FONDAZIONE:  2019</p>
                <p>SEDE:  SIlverstone, UK</p>
                <p>MONDIALI COSTRUTTORI:  0 </p>
                <p>TEAM PRINCIPAL:  Mike Krack</p>
                <p>PILOTI: F. Alonso - L. Stroll </p>
            </div>
        </div>
          <div class="macchina">
            <img src="../immagini/aston.png">
          </div>
        </div>

        <div class="team2" id="HAAS">
          <div class="logoscuderia">
            <img src="../immagini/haass.png">
          </div>
          <div class="contenitore_squadra">
            <div class="squadra">
                <h1>HAAS F1 TEAM</h1>
                <p>ANNO FONDAZIONE:  2016</p>
                <p>SEDE:  Banbury, UK</p>
                <p>MONDIALI COSTRUTTORI:  0 </p>
                <p>TEAM PRINCIPAL:  Gunther Steiner</p>
                <p>PILOTI: K. Magnussen - N. Hülkenberg </p>
            </div>
        </div>
          <div class="macchina">
            <img src="../immagini/haas.png">
          </div>
        </div>

        <div class="team2" id="AT">
          <div class="logoscuderia">
            <img src="../immagini/alphalogo.png">
          </div>
          <div class="contenitore_squadra">
            <div class="squadra">
                <h1>SCUDERIA ALPHATAURI</h1>
                <p>ANNO FONDAZIONE:  2006</p>
                <p>SEDE:  Faenza, IT</p>
                <p>MONDIALI COSTRUTTORI:  0 </p>
                <p>TEAM PRINCIPAL:  Franz Tost</p>
                <p>PILOTI: T. Tsunoda - N. De Vries </p>
            </div>
        </div>
          <div class="macchina">
            <img src="../immagini/alpha.png">
          </div>
        </div>

        <div class="team2" id="WLM">
          <div class="logoscuderia">
            <img src="../immagini/wllms.png">
          </div>
          <div class="contenitore_squadra">
            <div class="squadra">
                <h1>WILLIAMS RACING</h1>
                <p>ANNO FONDAZIONE:  1977</p>
                <p>SEDE:  Grove, UK</p>
                <p>MONDIALI COSTRUTTORI:  9 </p>
                <p>TEAM PRINCIPAL:  James Vowles</p>
                <p>PILOTI: A. Albon - L. Sargeant </p>
            </div>
        </div>
          <div class="macchina">
            <img src="../immagini/willi.png">
          </div>
        </div>
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