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
      <title>CIRCUITI</title>
  </head>

  <body>
    <div>
      
      
    <?php
      include('../script_header_footer/script_header.php')
    ?>

      <menu class="pistef1">
        <div class="circuit" id="BAH">
          <div class="layout">
            <img src="../immagini/Bahrain_Circuit.png">
          </div>
          <div class="contenitore_circuito">
            <div class="circuito">
              <h1>BAHRAIN INTERNATIONAL CIRCUIT</h1>
              <p>LOCALITÀ: Sakhir, Bahrain</p>
              <p>ANNO COSTRUZIONE: 2004</p>
              <p>LUNGHEZZA: 5412 m </p>
              <p>LAPS: 56 Giri</p>
              <p>CURVE: 15 </p>
              <p>GIRO RECORD: 1'31"447 P. De la Rosa </p>
            </div>
          </div>
        </div>

        <div class="circuit" id="ARAB">
          <div class="layout">
            <img src="../immagini/arabia_circuit.png">
          </div>
          <div class="contenitore_circuito">
            <div class="circuito">
              <h1>JEDDAH CORNICHE CIRCUIT</h1>
              <p>LOCALITÀ:  Jeddah, Arabia Saudita</p>
              <p>ANNO COSTRUZIONE: 2021</p>
              <p>LUNGHEZZA: 6174 m </p>
              <p>LAPS: 50 Giri</p>
              <p>CURVE: 27 </p>
              <p>GIRO RECORD: 1'30"734 L. Hamilton </p>
            </div>
          </div>
        </div>

        <div class="circuit" id="AUS">
          <div class="layout">
            <img src="../immagini/australia_circuit.png">
          </div>
          <div class="contenitore_circuito">
            <div class="circuito">
              <h1>ALBERT PARK CIRCUIT</h1>
              <p>LOCALITÀ: Melbourne, Australia</p>
              <p>ANNO COSTRUZIONE: 1996</p>
              <p>LUNGHEZZA: 5278 m </p>
              <p>LAPS: 58 Giri</p>
              <p>CURVE: 14 </p>
              <p>GIRO RECORD: 1'20"260 C. Leclerc </p>
            </div>
          </div>
        </div>

        <div class="circuit" id="CHI">
          <div class="layout">
            <img src="../immagini/china_circuit.png">
          </div>
          <div class="contenitore_circuito">
            <div class="circuito">
              <h1>SHANGHAI CIRCUIT</h1>
              <p>LOCALITÀ: Shanghai, Cina</p>
              <p>ANNO COSTRUZIONE: 2004</p>
              <p>LUNGHEZZA: 5451 m </p>
              <p>LAPS: 57 Giri</p>
              <p>CURVE: 16 </p>
              <p>GIRO RECORD: 1'32"238 M. Shumacher </p>
            </div>
          </div>
        </div>

        <div class="circuit" id="BAKU">
          <div class="layout">
            <img src="../immagini/baku_circuit.png">
          </div>
          <div class="contenitore_circuito">
            <div class="circuito">
              <h1>BAKU CITY CIRCUIT</h1>
              <p>LOCALITÀ: Baku, Azerbaijan</p>
              <p>ANNO COSTRUZIONE: 2016</p>
              <p>LUNGHEZZA: 6033 m </p>
              <p>LAPS: 51 Giri</p>
              <p>CURVE: 20 </p>
              <p>GIRO RECORD: 1'43"009 c. Leclerc </p>
            </div>
          </div>
        </div>

        <div class="circuit" id="MIAMI">
          <div class="layout">
            <img src="../immagini/miami_circuit.png">
          </div>
          <div class="contenitore_circuito">
            <div class="circuito">
              <h1>MIAMI INTERNATIONAL CIRCUIT</h1>
              <p>LOCALITÀ: Miami gardens, USA</p>
              <p>ANNO COSTRUZIONE: 2022</p>
              <p>LUNGHEZZA: 5412 m </p>
              <p>LAPS: 57 Giri</p>
              <p>CURVE: 19 </p>
              <p>GIRO RECORD: 1'31"361 M.Verstappen </p>
            </div>
          </div>
        </div>

        <div class="circuit" id="IMO">
          <div class="layout">
            <img src="../immagini/imola_circuit.png">
          </div>
          <div class="contenitore_circuito">
            <div class="circuito">
              <h1>AUTODROMO ENZO E DINO FERRARI</h1>
              <p>LOCALITÀ: Imola, Italia</p>
              <p>ANNO COSTRUZIONE: 1953</p>
              <p>LUNGHEZZA: 4909 m </p>
              <p>LAPS: 63 Giri</p>
              <p>CURVE: 19 </p>
              <p>GIRO RECORD: 1'15"484 L: Hamilton </p>
            </div>
          </div>
        </div>

        <div class="circuit" id="MON">
          <div class="layout">
            <img src="../immagini/monaco_circuit.png">
          </div>
          <div class="contenitore_circuito">
            <div class="circuito">
              <h1>MONTE CARLO CITY CIRCUIT</h1>
              <p>LOCALITÀ: Monte Carlo, Monaco</p>
              <p>ANNO COSTRUZIONE: 1929</p>
              <p>LUNGHEZZA: 3337 m </p>
              <p>LAPS: 78 Giri</p>
              <p>CURVE: 19 </p>
              <p>GIRO RECORD: 1'12"909 L. Hamilton </p>
            </div>
          </div>
        </div>

        <div class="circuit" id="ESP">
          <div class="layout">
            <img src="../immagini/spagna_circuit.png">
          </div>
          <div class="contenitore_circuito">
            <div class="circuito">
              <h1>CIRCUIT DE CATALUNYA</h1>
              <p>LOCALITÀ: Montmelò, Spagna</p>
              <p>ANNO COSTRUZIONE: 1991</p>
              <p>LUNGHEZZA: 4657 m </p>
              <p>LAPS: 66 Giri</p>
              <p>CURVE: 14 </p>
              <p>GIRO RECORD: 1'18"149 M. Verstappen </p>
            </div>
          </div>
        </div>

        <div class="circuit" id="CAN">
          <div class="layout">
            <img src="../immagini/canada_circuit.png">
          </div>
          <div class="contenitore_circuito">
            <div class="circuito">
              <h1>CIRCUIT GILLES VILLENEUVE</h1>
              <p>LOCALITÀ: Montrèal, Canada</p>
              <p>ANNO COSTRUZIONE: 1978</p>
              <p>LUNGHEZZA: 4361 m </p>
              <p>LAPS: 70 Giri</p>
              <p>CURVE: 14 </p>
              <p>GIRO RECORD: 1'13"071 V. Bottas </p>
            </div>
          </div>
        </div>

        <div class="circuit" id="AUSTR">
          <div class="layout">
            <img src="../immagini/austria_circuit.png">
          </div>
          <div class="contenitore_circuito">
            <div class="circuito">
              <h1>RED BULL RING</h1>
              <p>LOCALITÀ: Spielberg, Austria</p>
              <p>ANNO COSTRUZIONE: 1996</p>
              <p>LUNGHEZZA: 4318 m </p>
              <p>LAPS: 71 Giri</p>
              <p>CURVE: 10 </p>
              <p>GIRO RECORD: 1'05"619 C. Sainz </p>
            </div>
          </div>
        </div>

        <div class="circuit" id="INGL">
          <div class="layout">
            <img src="../immagini/silverstone_circuit.png">
          </div>
          <div class="contenitore_circuito">
            <div class="circuito">
              <h1>SILVERSTONE CIRCUIT</h1>
              <p>LOCALITÀ: Silverstone, UK</p>
              <p>ANNO COSTRUZIONE: 1947</p>
              <p>LUNGHEZZA: 5891 m </p>
              <p>LAPS: 52 Giri</p>
              <p>CURVE: 18 </p>
              <p>GIRO RECORD: 1'27"097 M. Verstappen </p>
            </div>
          </div>
        </div>

        <div class="circuit" id="UNG">
          <div class="layout">
            <img src="../immagini/ungheria_circuit.png">
          </div>
          <div class="contenitore_circuito">
            <div class="circuito">
              <h1>HUNGARORING</h1>
              <p>LOCALITÀ: Mogyorod, Ungheria</p>
              <p>ANNO COSTRUZIONE: 1986</p>
              <p>LUNGHEZZA: 4381 m </p>
              <p>LAPS: 70 Giri</p>
              <p>CURVE: 14 </p>
              <p>GIRO RECORD: 1'16"627 L. Hamilton </p>
            </div>
          </div>
        </div>

        <div class="circuit" id="SPA">
          <div class="layout">
            <img src="../immagini/circuito-spa.png">
          </div>
          <div class="contenitore_circuito">
            <div class="circuito">
              <h1>SPA-FRANCORCHAMPS CIRCUIT</h1>
              <p>LOCALITÀ: Francorchamps, Belgio</p>
              <p>ANNO COSTRUZIONE: 1924</p>
              <p>LUNGHEZZA: 7004 m </p>
              <p>LAPS: 44 Giri</p>
              <p>CURVE: 19 </p>
              <p>GIRO RECORD: 1'46"286 V. Bottas </p>
            </div>
          </div>
        </div>

        <div class="circuit" id="NDL">
          <div class="layout">
            <img src="../immagini/olanda_circuit.png">
          </div>
          <div class="contenitore_circuito">
            <div class="circuito">
              <h1>ZANDVOORT CIRCUIT</h1>
              <p>LOCALITÀ: Zandvoort, Paesi Bassi</p>
              <p>ANNO COSTRUZIONE: 1939</p>
              <p>LUNGHEZZA: 4259 m </p>
              <p>LAPS: 72 Giri</p>
              <p>CURVE: 14 </p>
              <p>GIRO RECORD: 1'11"097 L. Hamilton </p>
            </div>
          </div>
        </div>

        <div class="circuit" id="ITA">
          <div class="layout">
            <img src="../immagini/monza_circuit.png">
          </div>
          <div class="contenitore_circuito">
            <div class="circuito">
              <h1>AUTODROMO DI MONZA</h1>
              <p>LOCALITÀ: Monza, Italia</p>
              <p>ANNO COSTRUZIONE: 1922</p>
              <p>LUNGHEZZA: 5793 m </p>
              <p>LAPS: 53 Giri</p>
              <p>CURVE: 11 </p>
              <p>GIRO RECORD: 1'21"046 R. Barrichello </p>
            </div>
          </div>
        </div>

        <div class="circuit" id="SIN">
          <div class="layout">
            <img src="../immagini/Singapore_Circuit.png">
          </div>
          <div class="contenitore_circuito">
            <div class="circuito">
              <h1>SINGAPORE STREET CIRCUIT</h1>
              <p>LOCALITÀ: Singapore, Singapore</p>
              <p>ANNO COSTRUZIONE: 2008</p>
              <p>LUNGHEZZA: 4928 m </p>
              <p>LAPS: 61 Giri</p>
              <p>CURVE: 19 </p>
              <p>GIRO RECORD: 1'36"015 L. Hamilton </p>
            </div>
          </div>
        </div>

        <div class="circuit" id="GIAP">
          <div class="layout">
            <img src="../immagini/cirucito-giappone.png">
          </div>
          <div class="contenitore_circuito">
            <div class="circuito">
              <h1>SUZUKA INTERNATIONAL CIRCUIT</h1>
              <p>LOCALITÀ: Suzuka, Giappone</p>
              <p>ANNO COSTRUZIONE: 1962</p>
              <p>LUNGHEZZA: 5807 m </p>
              <p>LAPS: 53 Giri</p>
              <p>CURVE: 18 </p>
              <p>GIRO RECORD: 1'30"983 L. Hamilton </p>
            </div>
          </div>
        </div>
        
        <div class="circuit" id="QAT">
          <div class="layout">
            <img src="../immagini/qatar_circuit.png">
          </div>
          <div class="contenitore_circuito">
            <div class="circuito">
              <h1>LUSAIL INTERNATIONAL CIRCUIT</h1>
              <p>LOCALITÀ: Doha, Qatar</p>
              <p>ANNO COSTRUZIONE: 2004</p>
              <p>LUNGHEZZA: 5380 m </p>
              <p>LAPS: 57 Giri</p>
              <p>CURVE: 18 </p>
              <p>GIRO RECORD: 1'23"196 M. Verstappen </p>
            </div>
          </div>
        </div>

        <div class="circuit" id="COTA">
          <div class="layout">
            <img src="../immagini/cota_circuit.png">
          </div>
          <div class="contenitore_circuito">
            <div class="circuito">
              <h1>CIRCUIT OF THE AMERICAS</h1>
              <p>LOCALITÀ: Austin, USA</p>
              <p>ANNO COSTRUZIONE: 2012</p>
              <p>LUNGHEZZA: 5313 m </p>
              <p>LAPS: 57 Giri</p>
              <p>CURVE: 20 </p>
              <p>GIRO RECORD: 1'36"169 C. Leclerc</p>
            </div>
          </div>
        </div>

        <div class="circuit" id="MES">
          <div class="layout">
            <img src="../immagini/messico_circut.png">
          </div>
          <div class="contenitore_circuito">
            <div class="circuito">
              <h1>AUTODROMO HERMANOS RODRIGUEZ</h1>
              <p>LOCALITÀ: Città del Messico, Messico</p>
              <p>ANNO COSTRUZIONE: 1962</p>
              <p>LUNGHEZZA: 4304 m </p>
              <p>LAPS: 71 Giri</p>
              <p>CURVE: 17 </p>
              <p>GIRO RECORD: 1'17"774 V. Bottas </p>
            </div>
          </div>
        </div>

        <div class="circuit" id="BRA">
          <div class="layout">
            <img src="../immagini/brasile_circuit.png">
          </div>
          <div class="contenitore_circuito">
            <div class="circuito">
              <h1>AUTODROMO JOSÈ CARLOS PACE</h1>
              <p>LOCALITÀ: San Paolo del Brasile, Brasile</p>
              <p>ANNO COSTRUZIONE: 1940</p>
              <p>LUNGHEZZA: 4309 m </p>
              <p>LAPS: 71 Giri</p>
              <p>CURVE: 15 </p>
              <p>GIRO RECORD: 1'10"540 V. Bottas </p>
            </div>
          </div>
        </div>

        <div class="circuit" id="LAS">
          <div class="layout">
            <img src="../immagini/lasvegas_circuit.jpg">
          </div>
          <div class="contenitore_circuito">
            <div class="circuito">
              <h1>LAS VEGAS CITY CIRCUIT</h1>
              <p>LOCALITÀ: Las Vegas, USA</p>
              <p>ANNO COSTRUZIONE: 2023</p>
              <p>LUNGHEZZA: 6120 m </p>
              <p>LAPS: 50 Giri</p>
              <p>CURVE: 14 </p>
              <p>GIRO RECORD: Nessun Record </p>
            </div>
          </div>
        </div>

        <div class="circuit" id="ABU">
          <div class="layout">
            <img src="../immagini/abudhabi_circuit.png">
          </div>
          <div class="contenitore_circuito">
            <div class="circuito">
              <h1>YAS MARINA CIRCUIT</h1>
              <p>LOCALITÀ: Abu Dhabi, Emirati Arabi Uniti</p>
              <p>ANNO COSTRUZIONE: 2009</p>
              <p>LUNGHEZZA: 5281 m </p>
              <p>LAPS: 58 Giri</p>
              <p>CURVE: 16 </p>
              <p>GIRO RECORD: 1'26"103 M. Verstappen </p>
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