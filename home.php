<?php
    session_start();

    require_once('file_php/dati_connessione.php');

    if(isset($_SESSION["email"]))
    {
        header('location ../home.php');
        $email = $_SESSION["email"];
    }

    if(isset($_SESSION["accesso"])) {$accesso = $_SESSION["accesso"];} else{ $accesso = false;}
    
?>  

<!DOCTYPE html>
<html> 

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="stile.css">
      <title>FORMULA 1</title>
      <link rel="icon" type="img/png" href="immagini/f11.png">
  </head>

  <body class="home">
    <div>
      <header>
        <div class="fotomenuhome">
          <a href="home.php"><img id="f1logo" src="immagini/f1logo.png"></a> 
        </div>

        <a href=""><div class="icon_bar">
               <span></span>
               <span></span>
               <span></span>
        </div>
      </a>
          <div class="menu">
            <nav>
              
              <div class="dropdown">
                <button class="dropbtn"><a href="pagine/piloti.php">PILOTI</a></button>
                  <div class="dropdown-content-piloti">
                    <div class="piloti">
                      <a href="pagine/piloti.php #VER"><img id="caschi" src="immagini/verstappen.PNG">M. Verstappen</a>
                      <a href="pagine/piloti.php #LEC"><img id="caschi" src="immagini/leclerc.PNG">C. Leclerc</a>
                      <a href="pagine/piloti.php #HAM"><img id="caschi" src="immagini/hamilton.PNG">L. Hamilton</a>
                      <a href="pagine/piloti.php #NOR"><img id="caschi" src="immagini/norris.PNG">L. Norris</a>
                      <a href="pagine/piloti.php #GAS"><img id="caschi" src="immagini/gasly.PNG">P. Gasly</a>
                      <a href="pagine/piloti.php #BOT"><img id="caschi" src="immagini/bottas.PNG">V. Bottas</a>
                      <a href="pagine/piloti.php #ALO"><img id="caschi" src="immagini/alonso.PNG">F. Alonso</a>
                      <a href="pagine/piloti.php #MAG"><img id="caschi" src="immagini/magnussen.PNG">K. Magnussen</a>
                      <a href="pagine/piloti.php #TSU"><img id="caschi" src="immagini/tsunoda.PNG">Y. Tsunoda</a>
                      <a href="pagine/piloti.php #ALB"><img id="caschi" src="immagini/albon.PNG">A. Albon</a>
                    </div>
                    <div class="piloti">
                      <a href="pagine/piloti.php #PER"><img id="caschi" src="immagini/perez.PNG">S. Perez</a>
                      <a href="pagine/piloti.php #SAI"><img id="caschi" src="immagini/sainz.PNG">C. Sainz</a>
                      <a href="pagine/piloti.php #RUS"><img id="caschi" src="immagini/russel.PNG">G. Russell</a>
                      <a href="pagine/piloti.php #PIA"><img id="caschi" src="immagini/piastri.png">O. Piastri</a>
                      <a href="pagine/piloti.php #OCO"><img id="caschi" src="immagini/ocon.PNG">E. Ocon</a>
                      <a href="pagine/piloti.php #ZHO"><img id="caschi" src="immagini/zhou.PNG">G. Zhou</a>
                      <a href="pagine/piloti.php #STR"><img id="caschi" src="immagini/stroll.PNG">L. Stroll</a> 
                      <a href="pagine/piloti.php #HUL"><img id="caschi" src="immagini/hulkenberg.PNG">N. Hülkenberg</a>                        
                      <a href="pagine/piloti.php #DEV"><img id="caschi" src="immagini/devries.PNG">N. De Vries</a>                       
                      <a href="pagine/piloti.php #SAR"><img id="caschi" src="immagini/sargent.PNG">L. Sargeant</a>
                    </div>
                  </div>
              </div>
              
              <div class="dropdown">
                <button class="dropbtn"><a href="pagine/teams.php">TEAMS</a></button>
                  <div class="dropdown-content-teams">
                    <div class="teams">
                      <a href="pagine/teams.php #RDB"><img id="logo" src="immagini/redbull.jpg">Red Bull</a>
                      <a href="pagine/teams.php #MRC"><img id="logo" src="immagini/mercedes.jpg">Mercedes</a>
                      <a href="pagine/teams.php #ALP"><img id="logo" src="immagini/alpine.png">Alpine</a>
                      <a href="pagine/teams.php #AST"><img id="logo" src="immagini/aston.jpg">Aston Martin</a>
                      <a href="pagine/teams.php #AT"><img id="logo" src="immagini/alphatauri.jpg">Alpha Tauri</a>
                    </div>
                    <div class="teams">
                      <a href="pagine/teams.php #FRR"><img id="logo" src="immagini/ferrari.jpg">Ferrari</a>
                      <a href="pagine/teams.php #MCL"><img id="logo" src="immagini/mclaren.png">McLaren</a>
                      <a href="pagine/teams.php #ALF"><img id="logo" src="immagini/alfa romeo.jpeg">Alfa Romeo</a>
                      <a href="pagine/teams.php #HAAS"><img id="logo" src="immagini/haas.jpg">Haas</a>
                      <a href="pagine/teams.php #WLM"><img id="logo" src="immagini/williams.jpg">Williams</a>
                    </div>
                  </div>
              </div>

              <div class="dropdown">
                <button class="dropbtn"><a href="pagine/circuiti.php">CIRCUITI</a></button>
                  <div class="dropdown-content-circuiti">
                    <div class="circuiti">
                      <a href="pagine/circuiti.php" #BAH><img id="flag" src="immagini/bahrain.png">Bahrain</a>
                      <a href="pagine/circuiti.php" #ARAB><img id="flag" src="immagini/arabia.png">Arabia Sudata</a>
                      <a href="pagine/circuiti.php" #AUS><img id="flag" src="immagini/australia.jpg">Australia</a>
                      <a href="pagine/circuiti.php" #CHI><img id="flag" src="immagini/china.png">Cina</a>
                      <a href="pagine/circuiti.php" #BAKU><img id="flag" src="immagini/azerbaijan.png">Azerbaijan</a>
                      <a href="pagine/circuiti.php" #MIAMI><img id="flag" src="immagini/USA.png">Miami</a>
                      <a href="pagine/circuiti.php" #IMO><img id="flag" src="immagini/italia.png">Imola</a>
                      <a href="pagine/circuiti.php" #MON><img id="flag" src="immagini/monaco.png">Monaco</a> 
                    </div>
                    <div class="circuiti">
                      <a href="pagine/circuiti.php" #ESP><img id="flag" src="immagini/spagna.png">Spagna</a>
                      <a href="pagine/circuiti.php" #CAN><img id="flag" src="immagini/canada.jpg">Canada</a>                          
                      <a href="pagine/circuiti.php" #AUSTR><img id="flag" src="immagini/Austria.jpg">Austria</a>
                      <a href="pagine/circuiti.php" #INGL><img id="flag" src="immagini/UK.png">Regno Unito</a>
                      <a href="pagine/circuiti.php" #UNG><img id="flag" src="immagini/ungheria.png">Ungheria</a>
                      <a href="pagine/circuiti.php" #SPA><img id="flag" src="immagini/belgio.png">Belgio</a>
                      <a href="pagine/circuiti.php" #NDL><img id="flag" src="immagini/Olanda.jpg">Olanda</a>
                      <a href="pagine/circuiti.php" #ITA><img id="flag" src="immagini/italia.png">Italia</a>                      
                    </div>
                    <div class="circuiti">
                      <a href="pagine/circuiti.php" #SIN><img id="flag" src="immagini/singapore.png">Singapore</a>                                                 
                      <a href="pagine/circuiti.php" #GIAP><img id="flag" src="immagini/giappone.png">Giappone</a>
                      <a href="pagine/circuiti.php" #QAT><img id="flag" src="immagini/qatar.jpg">Qatar</a>
                      <a href="pagine/circuiti.php" #COTA><img id="flag" src="immagini/USA.png">USA</a> 
                      <a href="pagine/circuiti.php" #MES><img id="flag" src="immagini/messico.png">Messico</a> 
                      <a href="pagine/circuiti.php" #BRA><img id="flag" src="immagini/brasile.jpg">Brasile</a>
                      <a href="pagine/circuiti.php" #LAS><img id="flag" src="immagini/USA.png">Las Vegas</a>                        
                      <a href="pagine/circuiti.php" #ABU><img id="flag" src="immagini/abudhabi.png">Abu Dhabi</a>
                    </div>
                  </div>
              </div>

              <div class="dropdown">
                <button class="dropbtn"><a href="pagine/classifica.php">CLASSIFICA </a></button>
              </div>
              
              <div class="dropdown">
                <button class="dropbtn" id="stg"><a href="pagine/stagionipassate.php">STAGIONI</a></button>
              </div>
              <div class="dropdown">
                <button class="dropbtn"><a href="pagine/">FANTASY</a></button>
              </div>
             </nav>
            </div> 
            <div class="fotomenuhome">
        <a href="https://www.fia.com/"><img id="fialogo" src= "immagini/fialogo.png"></a>
       </div>
      </header>

      <menu>
        <div id="scacchi">
          <div class="accesso_iscrizione">
             <div class="Login" id="iscrizione">
              <a href="pagine/iscrizione.php">Iscriviti</a>
          </div> 
          <div class="Login" id="acc">
            <a href="pagine/accesso.php">Accedi</a>
        </div> 
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
                <source src="video/siglaf1.mp4" type="video/mp4">
              </video>
            </div>

            <div class="slideshow-container">

              <div class="mySlides fade">
                <img src="immagini/1.jpg" style="width:100%">
              </div>
            
              <div class="mySlides fade">
                <img src="immagini/2.jpg" style="width:100%">
              </div>
            
              <div class="mySlides fade">
                <img src="immagini/3.png" style="width:100%">
              </div>

              <div class="mySlides fade">
                <img src="immagini/4.jpg" style="width:100%">
              </div>

              <div class="mySlides fade">
                <img src="immagini/5.jpg" style="width:100%">
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

        <footer>
          <div class="foot">
            <p>federico.sala01@liceobanfi.eu  -  gasparing.davide@liceobanfi.eu</p>
            <p>+39 346 6433 325  -  +39 542 2655 886</p>
            <p>Sala Federico  -  Gasparin Davide</p>
          </div>
        </footer>
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