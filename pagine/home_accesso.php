<?php
    session_start();

    require_once('../file_php/dati_connessione.php');

    if(isset($_SESSION["email"]))
    {
        header('location ../home.php');
        $email = $_SESSION["email"];
    }

      if(isset($_SESSION["accesso"])) {$accesso = $_SESSION["accesso"];} else{$acceso = false;}
      if(isset($_SESSION["nome_squadra"])) {$nome_squadra = $_SESSION["nome_squadra"];} else{$nome_squadra = "";}
?>

<!DOCTYPE html>
<html> 

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../stile.css">
      <title>FORMULA 1</title>
      <link rel="icon" type="img/png" href="../immagini/f11.png">
  </head>

  <body class="home">
    <div>
    <?php
      include('../script_header_footer/script_header_accesso.php')
    ?>
      <menu>
        <div id="scacchi">
          <div class="saluto">
             <div class="saluto_utente">
              <p> <?php 
                    $connessione = new mysqli("localhost", "root", "", "formula_1");
                    if($connessione->connect_error){
                      die("<p>Connessione al server non riuscita: ".$connessione->connect_error."</p>");
                    }

                    $sql = "SELECT nome FROM utente WHERE email = '$email'";

                    $ris = $connessione->query($sql) or die("<p>Query fallita!</p>");

                    foreach($ris as $riga)
                    {
                      echo"Ciao " . $riga["nome"] ;
                    }

                    
              ?>
               </p>
          </div> 
          <div class="Login" id="acc">
            <form action="../file_php/logout.php" id="form2">
              <input type="submit" value="Logout" id="logout" ></input>
            </form>
        </div> 
        
          </div>
          <div class="saluto_utente" id="area_personale">
            <?php
                $acceso = false;

                if(isset($_SESSION["accesso"])) $accesso = $_SESSION["accesso"];

                if($acceso === true)
                {
                  echo'<a href ="pagina_area_personale.php"><img src="../immagini/iconaomino.png" id="immagineomino"></a>';
                }
                else
                {
                  echo '<a href ="pagina_area_personale.php"><img src="../immagini/iconaomino.png" id="immagineomino"></a>';
                }
            ?>
        </div>
         
        </div>
        <div class="griglia">
          <div class="notizies">
            <h2 id="titoli"> COS'É LA F1</h2>  
            <p id="text">La F1, abbreviazione di Formula 1, è la categoria regina del motorsport. Si tratta di una competizione automobilistica che si svolge su piste appositamente costruite o in circuiti cittadini, utilizzando vetture monoposto ad alta tecnologia che raggiungono velocità elevate.
            </p>
            <p id="text">
              La Formula 1 è regolamentata dalla Federazione Internazionale dell'Automobile (FIA) e prevede una serie di gare, chiamate Gran Premi, che si disputano in diverse parti del mondo durante la stagione, di solito tra marzo e dicembre. Le squadre che partecipano alla F1 sono composte da due piloti ciascuna, che competono per il titolo di Campione del Mondo dei Piloti, mentre le squadre gareggiano per il titolo di Campione del Mondo Costruttori.
            </p>
            <h2 id="titoli"> LA STORIA</h2>  
            <p id="text">La sua storia inizia nel 1950, quando venne organizzato il primo campionato mondiale di Formula 1 dalla Federazione Internazionale dell'Automobile (FIA).
            </p>
            <p id="text">
              La prima stagione del campionato mondiale di Formula 1 vide la partecipazione di sette squadre, con un totale di venti piloti, tra cui il leggendario Juan Manuel Fangio, che vinse il suo primo titolo mondiale nel 1951.
            </p>
            <p id="text">
              Nel corso degli anni, la F1 è diventata sempre più popolare e prestigiosa, attirando i migliori piloti, le più grandi case automobilistiche e i maggiori sponsor del mondo. Alcuni piloti che hanno fatto la storia della F1 sono Ayrton Senna, Alain Prost, Michael Schumacher e Lewis Hamilton.
            </p>
            <p id="text">
              La F1 ha subito numerosi cambiamenti nel corso degli anni, sia a livello tecnico che regolamentare, al fine di migliorare la sicurezza dei piloti, aumentare l'efficienza dei veicoli e migliorare lo spettacolo per i tifosi.
            </p>
            <p id="text">
              Oggi, la Formula 1 è un evento sportivo globale, seguito da milioni di appassionati in tutto il mondo, con un calendario di gare che si svolgono in tutto il mondo, da marzo a dicembre, e un sistema di punti che determina il campione del mondo di F1 ogni anno.
            </p>
          </div>

          <div class="notizied">

            <div class="sigla">
              <video width=100% autoplay muted loop>
                <source src="../video/siglaf1.mp4" type="video/mp4">
              </video>
            </div>

            <div class="slideshow-container">

              <div class="mySlides fade">
                <img src="../immagini/1.jpg" style="width:100%">
              </div>
            
              <div class="mySlides fade">
                <img src="../immagini/2.jpg" style="width:100%">
              </div>
            
              <div class="mySlides fade">
                <img src="../immagini/3.png" style="width:100%">
              </div>

              <div class="mySlides fade">
                <img src="../immagini/4.jpg" style="width:100%">
              </div>

              <div class="mySlides fade">
                <img src="../immagini/5.jpg" style="width:100%">
              </div>            
            </div>
            
            <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span>
              <span class="dot" onclick="currentSlide(2)"></span>
              <span class="dot" onclick="currentSlide(3)"></span>
              <span class="dot" onclick="currentSlide(4)"></span>
              <span class="dot" onclick="currentSlide(5)"></span>
            </div>

            <script>
              let slideIndex = 0;
              showSlides();
              
              function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 5000); 
              }
              
              </script>
            
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