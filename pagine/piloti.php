<?php
    session_start();
    
    require_once('../file_php/dati_connessione.php');

    if(isset($_SESSION["email"]))
    {
        $email = $_SESSION["email"];
    }
    if(isset($_SESSION["nome_squadra"])) $nome_squadra = $_SESSION["nome_squadra"];
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
      <title>PILOTI</title>
  </head>

  <body>
    <div>
    <?php
      include('../script_header_footer/script_header.php')
    ?>


      <menu class="team">

        <div id="RDB" class="pilota2">
          <div class="fotopilota" id="VER">
              <img src="../immagini/verstappenpilota.png">
          </div>
          <div class="contenitore_pilota">
            <div class="pilota">
              <h1>MAX VERSTAPPEN</h1>
              <p>DATA DI NASCITA: 30/09/1997</p>
              <p>NUMERO: 1</p>
              <p>VITTORIE: 36</p>
              <p>PODI: 77</p>
              <p>POLE POSITION: 20</p>
              <p>GP DISPUTATI: 163</p>
              <p>PUNTI TOTALI: 2011.5</p>
              <p>ESORDIO: 15/03/2015</p>
            </div>
          </div>
          <div class="casco">
            <img src="../immagini/verstappen.PNG">
          </div>
          <div class="numero">
            <img src="../immagini/redb.png">
          </div>
        </div>

        <div id="RDB" class="pilota2">
          <div class="fotopilota" id="PER">
            <img src="../immagini/perezpilota.png">
          </div>
          <div class="contenitore_pilota">
            <div class="pilota">
              <h1>SERGIO PEREZ</h1>
              <p>DATA DI NASCITA: 26/01/1990</p>
              <p>NUMERO: 11</p>
              <p>VITTORIE: 4</p>
              <p>PODI: 26</p>
              <p>POLE POSITION: 1</p>
              <p>GP DISPUTATI: 239</p>
              <p>PUNTI TOTALI: 1201</p>
              <p>ESORDIO: 27/03/2011</p>
            </div>
          </div>
          <div class="casco">
            <img src="../immagini/perez.PNG">
          </div>
          <div class="numero">
           <img src="../immagini/redb.png"> 
          </div>
        </div>

        <div class="pilota2" id="FRR">
          <div class="fotopilota" id="LEC">
            <img src="../immagini/leclercpilota.png">
          </div>
          <div class="contenitore_pilota">
            <div class="pilota">
              <h1>CHARLES LECLERC</h1>
              <p>DATA DI NASCITA: 16/10/1997</p>
              <p>NUMERO: 16</p>
              <p>VITTORIE: 5</p>
              <p>PODI: 24</p>
              <p>POLE POSITION: 18</p>
              <p>GP DISPUTATI: 103</p>
              <p>PUNTI TOTALI: 858</p>
              <p>ESORDIO: 25/03/2018</p>
            </div>
          </div>
          <div class="casco">
            <img src="../immagini/leclerc.PNG">
          </div>
          <div class="numero">
            <img src="../immagini/ferrari.png">
          </div>
        </div>

        <div class="pilota2" id="FRR">
          <div class="fotopilota" id="SAI">
            <img src="../immagini/sainzpilota.png">
          </div>
          <div class="contenitore_pilota">
            <div class="pilota">
              <h1>CARLOS SAINZ</h1>
              <p>DATA DI NASCITA: 01/09/1994</p>
              <p>NUMERO: 55</p>
              <p>VITTORIE: 1</p>
              <p>PODI: 14</p>
              <p>POLE POSITION: 3</p>
              <p>GP DISPUTATI: 163</p>
              <p>PUNTI TOTALI: 782.5</p>
              <p>ESORDIO: 15/03/2015</p>
            </div>
          </div>
          <div class="casco">
            <img src="../immagini/sainz.PNG">
          </div>
          <div class="numero">
            <img src="../immagini/ferrari.png">
          </div>
        </div>

        <div class="HAM" id="MRC">
          <div class="fotopilota" id="HAM">
            <img src="../immagini/hamiltonpilota.png">
          </div>
          <div class="contenitore_pilota">
            <div class="pilota">
              <h1>LEWIS HAMILTON</h1>
              <p>DATA DI NASCITA: 07/01/1985</p>
              <p>NUMERO: 44</p>
              <p>VITTORIE: 103</p>
              <p>PODI: 191</p>
              <p>POLE POSITION: 103</p>
              <p>GP DISPUTATI: 310</p>
              <p>PUNTI TOTALI: 4405.5</p>
              <p>ESORDIO: 18/03/2007</p>
            </div>
          </div>
          <div class="casco">
            <img src="../immagini/hamilton.PNG">
          </div>
          <div class="numero">
            <img src="../immagini/merced.png">
          </div>
        </div>

        <div class="team2" id="MRC">
          <div class="fotopilota" id="RUS">
            <img src="../immagini/russellpilota.png">
          </div>
          <div class="contenitore_pilota">
            <div class="pilota">
              <h1>GEORGE RUSSELL</h1>
              <p>DATA DI NASCITA: 15/03/1998</p>
              <p>NUMERO: 63</p>
              <p>VITTORIE: 1</p>
              <p>PODI: 9</p>
              <p>POLE POSITION: 1</p>
              <p>GP DISPUTATI: 82</p>
              <p>PUNTI TOTALI: 294</p>
              <p>ESORDIO: 17/03/2019</p>
            </div>
          </div>
          <div class="casco">
            <img src="../immagini/russel.PNG">
          </div>
          <div class="numero">
            <img src="../immagini/merced.png">
          </div>
        </div>

        <div class="team2" id="MCL">
          <div class="fotopilota" id="NOR">
            <img src="../immagini/lanopilota.png">
          </div>
          <div class="contenitore_pilota">
            <div class="pilota">
              <h1>LANDO NORRIS</h1>
              <p>DATA DI NASCITA: 13/11/1999</p>
              <p>NUMERO: 4</p>
              <p>VITTORIE: 0</p>
              <p>PODI: 6</p>
              <p>POLE POSITION: 1</p>
              <p>GP DISPUTATI: 82</p>
              <p>PUNTI TOTALI: 428</p>
              <p>ESORDIO: 17/03/2019</p>
            </div>
          </div>
          <div class="casco">
            <img src="../immagini/norris.PNG">
          </div>
          <div class="numero">
            <img src="../immagini/mcla.PNG">
          </div>
        </div>

        <div class="team2" id="MCL">
          <div class="fotopilota" id="PIA">
            <img src="../immagini/piastripilota.png">
          </div>
          <div class="contenitore_pilota">
            <div class="pilota">
              <h1>OSCAR PIASTRI</h1>
              <p>DATA DI NASCITA: 06/04/2001</p>
              <p>NUMERO: 81</p>
              <p>VITTORIE: 0</p>
              <p>PODI: 0</p>
              <p>POLE POSITION: 0</p>
              <p>GP DISPUTATI: 1</p>
              <p>PUNTI TOTALI: 0</p>
            </div>
          </div>
          <div class="casco">
            <img src="../immagini/piastri.png">
          </div>
          <div class="numero">
            <img src="../immagini/mcla.PNG">
          </div>
        </div>

        <div class="team2" id="ALP">
          <div class="fotopilota" id="GAS">
            <img src="../immagini/gaslypilota.png">
          </div>
          <div class="contenitore_pilota">
            <div class="pilota">
              <h1>PIERRE GASLY</h1>
              <p>DATA DI NASCITA: 07/02/1996</p>
              <p>NUMERO: 10</p>
              <p>VITTORIE: 1</p>
              <p>PODI: 3</p>
              <p>POLE POSITION: 0</p>
              <p>GP DISPUTATI: 108</p>
              <p>PUNTI TOTALI: 332</p>
              <p>ESORDIO: 01/10/2017</p>
            </div>
          </div>
          <div class="casco">
            <img src="../immagini/gasly.PNG">
          </div>
          <div class="numero">
            <img src="../immagini/alpine.png">
          </div>
        </div>

        <div class="pilota2" id="ALP">
          <div class="fotopilota" id="OCO">
            <img src="../immagini/oconpilota.png">
          </div>
          <div class="contenitore_pilota">
            <div class="pilota">
              <h1>ESTEBAN OCON</h1>
              <p>DATA DI NASCITA: 17/09/1996</p>
              <p>NUMERO: 31</p>
              <p>VITTORIE: 1</p>
              <p>PODI: 2</p>
              <p>POLE POSITION: 0</p>
              <p>GP DISPUTATI: 111</p>
              <p>PUNTI TOTALI: 364</p>
              <P>ESORDIO: 28/08/2016</P>
            </div>
          </div>
          <div class="casco">
            <img src="../immagini/ocon.PNG">
          </div>
          <div class="numero">
            <img src="../immagini/alpine.png">
          </div>
        </div>

        <div class="pilota2" id="ALF">
          <div class="fotopilota" id="BOT">
            <img src="../immagini/bottaspilota.png">
          </div>
          <div class="contenitore_pilota">
            <div class="pilota">
              <h1>VALTTERI BOTTAS</h1>
              <p>DATA DI NASCITA: 28/08/1989</p>
              <p>NUMERO: 77</p>
              <p>VITTORIE: 10</p>
              <p>PODI: 67</p>
              <p>POLE POSITION: 20</p>
              <p>GP DISPUTATI: 201</p>
              <p>PUNTI TOTALI: 1787</p>
              <p>ESORDIO: 17/03/2013</p>
            </div>
          </div>
          <div class="casco">
            <img src="../immagini/bottas.PNG">
          </div>
          <div class="numero">
            <img src="../immagini/alfarom.png">
          </div>
        </div>

        <div class="pilota2" id="ALF">
          <div class="fotopilota" id="ZHO">
            <img src="../immagini/zhoupilota.png">
          </div>
          <div class="contenitore_pilota">
            <div class="pilota">
              <h1>GUANYU ZHOU</h1>
              <p>DATA DI NASCITA: 30/05/1999</p>
              <p>NUMERO: 24</p>
              <p>VITTORIE: 0</p>
              <p>PODI: 0</p>
              <p>POLE POSITION: 0</p>
              <p>GP DISPUTATI: 22</p>
              <p>PUNTI TOTALI: 6</p>
              <p>ESORDIO: 20/03/2022</p>
            </div>
          </div>
          <div class="casco">
            <img src="../immagini/zhou.PNG">
          </div>
          <div class="numero">
            <img src="../immagini/alfarom.png">
          </div>
        </div>

        <div class="pilota2" id="AST">
          <div class="fotopilota" id="ALO">
            <img src="../immagini/alonsopilota.png">
          </div>
          <div class="contenitore_pilota">
            <div class="pilota">
              <h1>FERNANDO ALONSO</h1>
              <p>DATA DI NASCITA: 29/07/1981</p>
              <p>NUMERO: 14</p>
              <p>VITTORIE: 32</p>
              <p>PODI: 98</p>
              <p>POLE POSITION: 22</p>
              <p>GP DISPUTATI: 358</p>
              <p>PUNTI TOTALI: 2061</p>
              <p>ESORDIO: 4/03/2001</p>
            </div>
          </div>
          <div class="casco">
            <img src="../immagini/alonso.PNG">
          </div>
          <div class="numero">
            <img src="../immagini/Amf12.png">
          </div>
        </div>

        <div class="pilota2" id="AST">
          <div class="fotopilota" ID="STR">
            <img src="../immagini/strollpilota.png">
          </div>
          <div class="contenitore_pilota">
            <div class="pilota">
              <h1>LANCE STROLL</h1>
              <p>DATA DI NASCITA: 29/10/1998</p>
              <p>NUMERO: 18</p>
              <p>VITTORIE: 0</p>
              <p>PODI: 3</p>
              <p>POLE POSITION: 1</p>
              <p>GP DISPUTATI: 122</p>
              <p>PUNTI TOTALI: 194</p>
              <p>ESORDIO: 26/03/2017</p>
            </div>
          </div>
          <div class="casco">
            <img src="../immagini/stroll.PNG">
          </div>
          <div class="numero">
            <img src="../immagini/Amf12.png">
          </div>
        </div>

        <div class="pilota2" id="HAAS">
          <div class="fotopilota" id="MAG">
            <img src="../immagini/kevinpilota.png">
          </div>
          <div class="contenitore_pilota">
            <div class="pilota">
              <h1>KEVIN MAGNUSSEN</h1>
              <p>DATA DI NASCITA: 05/10/1992</p>
              <p>NUMERO: 20</p>
              <p>VITTORIE: 0</p>
              <p>PODI: 1</p>
              <p>POLE POSITION: 1</p>
              <p>GP DISPUTATI: 142</p>
              <p>PUNTI TOTALI: 183</p>
              <p>ESORDIO: 16/03/2014</p>
            </div>
          </div>
          <div class="casco">
            <img src="../immagini/magnussen.PNG">
          </div>
          <div class="numero">
            <img src="../immagini/haass.png">
          </div>
        </div>

        <div class="pilota2" id="HAAS">
          <div class="fotopilota" id="HUL">
            <img src="../immagini/hulkenbergpilota.png">
          </div>
          <div class="contenitore_pilota">
            <div class="pilota">
              <h1>NICO HULKENBERG</h1>
              <p>DATA DI NASCITA: 19/08/1987</p>
              <p>NUMERO: 27</p>
              <p>VITTORIE: 0</p>
              <p>PODI: 0</p>
              <p>POLE POSITION: 1</p>
              <p>GP DISPUTATI: 184</p>
              <p>PUNTI TOTALI: 521</p>
              <p>ESORDIO: 14/03/2010</p>
            </div>
          </div>
          <div class="casco">
            <img src="../immagini/hulkenberg.PNG">
          </div>
          <div class="numero">
            <img src="../immagini/haass.png">
          </div>
        </div>

        <div class="piltoa2" id="AT">
          <div class="fotopilota" ID="TSU">
            <img src="../immagini/yukipilota.png">
          </div>
          <div class="contenitore_pilota">
            <div class="pilota">
              <h1>YUKI TSUNODA</h1>
              <p>DATA DI NASCITA: 11/05/2000</p>
              <p>NUMERO: 22</p>
              <p>VITTORIE: 0</p>
              <p>PODI: 0</p>
              <p>POLE POSITION: 0</p>
              <p>GP DISPUTATI: 44</p>
              <p>PUNTI TOTALI: 44</p>
              <p>ESORDIO: 28/03/2021</p>
            </div>
          </div>
          <div class="casco">
            <img src="../immagini/tsunoda.PNG">
          </div>
          <div class="numero">
            <img src="../immagini/alphalogo.png">
          </div>
        </div>

        <div class="pilota2" id="AT">
          <div class="fotopilota" id="DEV">
            <img src="../immagini/devriespilota.png">
          </div>
          <div class="contenitore_pilota">
            <div class="pilota">
              <h1>NYCK DE VRIES</h1>
              <p>DATA DI NASCITA: 06/02/1995</p>
              <p>NUMERO: 21</p>
              <p>VITTORIE: 0</p>
              <p>PODI: 0</p>
              <p>POLE POSITION: 0</p>
              <p>GP DISPUTATI: 2</p>
              <p>PUNTI TOTALI: 2</p>
              <p>ESORDIO: 11/09/2022</p>
            </div>
          </div>
          <div class="casco">
            <img src="../immagini/devries.PNG">
          </div>
          <div class="numero">
            <img src="../immagini/alphalogo.png">
          </div>
        </div>

        <div class="pilota2" id="WLM">
          <div class="fotopilota" id="ALB">
            <img src="../immagini/albonpilota.png">
          </div>
          <div class="contenitore_pilota">
            <div class="pilota">
              <h1>ALEXANDER ALBON</h1>
              <p>DATA DI NASCITA: 23/06/1996</p>
              <p>NUMERO: 23</p>
              <p>VITTORIE: 0</p>
              <p>PODI: 2</p>
              <p>POLE POSITION: 0</p>
              <p>GP DISPUTATI: 60</p>
              <p>PUNTI TOTALI: 201</p>
              <p>ESORDIO: 17/03/2019</p>
            </div>
          </div>
          <div class="casco">
            <img src="../immagini/albon.PNG">
          </div>
          <div class="numero">
            <img src="../immagini/wllms.png">
          </div>
        </div>

        <div class="pilota2" id="WLM">
          <div class="fotopilota" id="SAR">
            <img src="../immagini/sargeantpilota.png">
          </div>
          <div class="contenitore_pilota">
            <div class="pilota">
              <h1>LOGAN SARGEANT</h1>
              <p>DATA DI NASCITA: 31/12/2000</p>
              <p>NUMERO: 2</p>
              <p>VITTORIE: 0</p>
              <p>PODI: 0</p>
              <p>POLE POSITION: 0</p>
              <p>GP DISPUTATI: 1</p>
              <p>PUNTI TOTALI: 0</p>
              <p>ESORDIO: 05/03/2023</p>
            </div>
          </div>
          <div class="casco">
            <img src="../immagini/sargent.PNG" alt="">
          </div>
          <div class="numero">
            <img src="../immagini/wllms.png">
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