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
      <title>STAGIONI PASSATE</title>
  </head>

  <body>
    <div>
    <?php
      include('../script_header_footer/script_header.php')
    ?>

      <menu>
        <div>
          <h1 id="titoloclassifica">CLASSIFICA PILOTI 2022</h1>
        </div>
        <div class="tabella">
          <table class="tab"; cellspacing ="0"; cellpadding ="0";>
            <tr>
              <td id="nomigs">PILOTI</td>
              <td id="gp"><img id="bandiera" src="../immagini/bahrain.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/arabia.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/australia.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/italia.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/USA.png"></td>             
              <td id="gp"><img id="bandiera" src="../immagini/spagna.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/monaco.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/azerbaijan.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/canada.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/uk.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/Austria.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/Francia.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/ungheria.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/belgio.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/Olanda.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/italia.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/singapore.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/giappone.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/USA.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/messico.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/brasile.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/abudhabi.png"></td>  
              <td id="tot">TOT</td>
            </tr>
            <tr>
              <td id="nomigc">VERSTAPPEN</td>
              <td id="puntig">19</td>
              <td id="puntig">1</td>
              <td id="puntig">RIT</td>
              <td id="puntig">1</td>
              <td id="puntig">1</td>
              <td id="puntig">1</td>
              <td id="puntig">3</td>
              <td id="puntig">1</td>
              <td id="puntig">1</td>
              <td id="puntig">7</td>
              <td id="puntig">2</td>
              <td id="puntig">1</td>
              <td id="puntig">1</td>
              <td id="puntig">1</td>
              <td id="puntig">1</td>
              <td id="puntig">1</td>
              <td id="puntig">7</td>
              <td id="puntig">1</td>
              <td id="puntig">1</td>
              <td id="puntig">1</td>
              <td id="puntig">6</td>
              <td id="puntig">1</td>
              <td id="puntig">454</td>
            </tr>
            <tr>
              <td id="nomigs">LECLERC</td>
              <td id="punti">1</td>
              <td id="punti">2</td>
              <td id="punti">1</td>
              <td id="punti">6</td>
              <td id="punti">2</td>
              <td id="punti">RIT</td>
              <td id="punti">4</td>
              <td id="punti">RIT</td>
              <td id="punti">5</td>
              <td id="punti">4</td>
              <td id="punti">1</td>
              <td id="punti">RIT</td>
              <td id="punti">6</td>
              <td id="punti">6</td>
              <td id="punti">3</td>
              <td id="punti">2</td>
              <td id="punti">2</td>
              <td id="punti">3</td>
              <td id="punti">3</td>
              <td id="punti">6</td>
              <td id="punti">4</td>
              <td id="punti">2</td>
              <td id="punti">308</td>    
            </tr>
            <tr>
              <td id="nomigc">PEREZ</td>
              <td id="puntig">18</td>
              <td id="puntig">4</td>
              <td id="puntig">2</td>
              <td id="puntig">2</td>
              <td id="puntig">4</td>
              <td id="puntig">2</td>
              <td id="puntig">1</td>
              <td id="puntig">2</td>
              <td id="puntig">RIT</td>
              <td id="puntig">2</td>
              <td id="puntig">RIT</td>
              <td id="puntig">4</td>
              <td id="puntig">5</td>
              <td id="puntig">2</td>
              <td id="puntig">5</td>
              <td id="puntig">6</td>
              <td id="puntig">1</td>
              <td id="puntig">2</td>
              <td id="puntig">4</td>
              <td id="puntig">3</td>
              <td id="puntig">7</td>
              <td id="puntig">3</td>
              <td id="puntig">305</td>
            </tr>
            <tr>
              <td id="nomigs">RUSSELL</td>
              <td id="punti">4</td>
              <td id="punti">5</td>
              <td id="punti">3</td>
              <td id="punti">4</td>
              <td id="punti">5</td>
              <td id="punti">3</td>
              <td id="punti">5</td>
              <td id="punti">3</td>
              <td id="punti">4</td>
              <td id="punti">RIT</td>
              <td id="punti">4</td>
              <td id="punti">3</td>
              <td id="punti">3</td>
              <td id="punti">4</td>
              <td id="punti">2</td>
              <td id="punti">3</td>
              <td id="punti">14</td>
              <td id="punti">8</td>
              <td id="punti">5</td>
              <td id="punti">4</td>
              <td id="punti">1</td>
              <td id="punti">5</td>
              <td id="punti">275</td>     
            </tr>
            <tr>
              <td id="nomigc">SAINZ</td>
              <td id="puntig">2</td>
              <td id="puntig">3</td>
              <td id="puntig">RIT</td>
              <td id="puntig">RIT</td>
              <td id="puntig">3</td>
              <td id="puntig">4</td>
              <td id="puntig">2</td>
              <td id="puntig">RIT</td>
              <td id="puntig">2</td>
              <td id="puntig">1</td>
              <td id="puntig">RIT</td>
              <td id="puntig">5</td>
              <td id="puntig">4</td>
              <td id="puntig">3</td>
              <td id="puntig">8</td>
              <td id="puntig">4</td>
              <td id="puntig">3</td>
              <td id="puntig">RIT</td>
              <td id="puntig">RIT</td>
              <td id="puntig">5</td>
              <td id="puntig">3</td>
              <td id="puntig">4</td>
              <td id="puntig">246</td>
            </tr>
            <tr>
              <td id="nomigs">HAMILTON</td>
              <td id="punti">3</td>
              <td id="punti">10</td>
              <td id="punti">4</td>
              <td id="punti">13</td>
              <td id="punti">6</td>
              <td id="punti">5</td>
              <td id="punti">8</td>
              <td id="punti">4</td>
              <td id="punti">3</td>
              <td id="punti">3</td>
              <td id="punti">3</td>
              <td id="punti">2</td>
              <td id="punti">2</td>
              <td id="punti">RIT</td>
              <td id="punti">4</td>
              <td id="punti">5</td>
              <td id="punti">9</td>
              <td id="punti">5</td>
              <td id="punti">2</td>
              <td id="punti">2</td>
              <td id="punti">2</td>
              <td id="punti">RIT</td>
              <td id="punti">240</td>      
            </tr>
            <tr>
              <td id="nomigc">NORRIS</td>
              <td id="puntig">15</td>
              <td id="puntig">7</td>
              <td id="puntig">5</td>
              <td id="puntig">3</td>
              <td id="puntig">RIT</td>
              <td id="puntig">8</td>
              <td id="puntig">6</td>
              <td id="puntig">9</td>
              <td id="puntig">15</td>
              <td id="puntig">6</td>
              <td id="puntig">7</td>
              <td id="puntig">7</td>
              <td id="puntig">7</td>
              <td id="puntig">12</td>
              <td id="puntig">7</td>
              <td id="puntig">7</td>
              <td id="puntig">4</td>
              <td id="puntig">10</td>
              <td id="puntig">6</td>
              <td id="puntig">9</td>
              <td id="puntig">RIT</td>
              <td id="puntig">6</td>
              <td id="puntig">122</td>
            </tr>
            <tr>
              <td id="nomigs">OCON</td>
              <td id="punti">7</td>
              <td id="punti">6</td>
              <td id="punti">7</td>
              <td id="punti">14</td>
              <td id="punti">8</td>
              <td id="punti">7</td>
              <td id="punti">12</td>
              <td id="punti">10</td>
              <td id="punti">6</td>
              <td id="punti">RIT</td>
              <td id="punti">5</td>
              <td id="punti">8</td>
              <td id="punti">9</td>
              <td id="punti">7</td>
              <td id="punti">9</td>
              <td id="punti">11</td>
              <td id="punti">RIT</td>
              <td id="punti">4</td>
              <td id="punti">11</td>
              <td id="punti">8</td>
              <td id="punti">8</td>
              <td id="punti">7</td>
              <td id="punti">92</td>     
            </tr>
            <tr>
              <td id="nomigc">ALONSO</td>
              <td id="puntig">9</td>
              <td id="puntig">RIT</td>
              <td id="puntig">17</td>
              <td id="puntig">RIT</td>
              <td id="puntig">11</td>
              <td id="puntig">9</td>
              <td id="puntig">7</td>
              <td id="puntig">7</td>
              <td id="puntig">9</td>
              <td id="puntig">5</td>
              <td id="puntig">10</td>
              <td id="puntig">6</td>
              <td id="puntig">8</td>
              <td id="puntig">5</td>
              <td id="puntig">6</td>
              <td id="puntig">RIT</td>
              <td id="puntig">RIT</td>
              <td id="puntig">7</td>
              <td id="puntig">7</td>
              <td id="puntig">19</td>
              <td id="puntig">5</td>
              <td id="puntig">RIT</td>
              <td id="puntig">81</td>   
            </tr>
            <tr>
              <td id="nomigs">BOTTAS</td>
              <td id="punti">6</td>
              <td id="punti">RIT</td>
              <td id="punti">8</td>
              <td id="punti">5</td>
              <td id="punti">7</td>
              <td id="punti">6</td>
              <td id="punti">9</td>
              <td id="punti">11</td>
              <td id="punti">7</td>
              <td id="punti">RIT</td>
              <td id="punti">11</td>
              <td id="punti">14</td>
              <td id="punti">20</td>
              <td id="punti">RIT</td>
              <td id="punti">RIT</td>
              <td id="punti">13</td>
              <td id="punti">11</td>
              <td id="punti">15</td>
              <td id="punti">RIT</td>
              <td id="punti">10</td>
              <td id="punti">9</td>
              <td id="punti">15</td>
              <td id="punti">49</td>        
            </tr>
            <tr>
              <td id="nomigc">RICCIARDO</td>
              <td id="puntig">14</td>
              <td id="puntig">RIT</td>
              <td id="puntig">6</td>
              <td id="puntig">18</td>
              <td id="puntig">13</td>
              <td id="puntig">12</td>
              <td id="puntig">13</td>
              <td id="puntig">8</td>
              <td id="puntig">11</td>
              <td id="puntig">13</td>
              <td id="puntig">9</td>
              <td id="puntig">9</td>
              <td id="puntig">15</td>
              <td id="puntig">15</td>
              <td id="puntig">17</td>
              <td id="puntig">RIT</td>
              <td id="puntig">5</td>
              <td id="puntig">11</td>
              <td id="puntig">16</td>
              <td id="puntig">7</td>
              <td id="puntig">RIT</td>
              <td id="puntig">9</td>
              <td id="puntig">37</td>   
            </tr>
            <tr>
              <td id="nomigs">VETTEL</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">RIT</td>
              <td id="punti">8</td>
              <td id="punti">17</td>
              <td id="punti">11</td>
              <td id="punti">10</td>
              <td id="punti">6</td>
              <td id="punti">12</td>
              <td id="punti">9</td>
              <td id="punti">17</td>
              <td id="punti">11</td>
              <td id="punti">10</td>
              <td id="punti">8</td>
              <td id="punti">14</td>
              <td id="punti">RIT</td>
              <td id="punti">8</td>
              <td id="punti">6</td>
              <td id="punti">8</td>
              <td id="punti">14</td>
              <td id="punti">11</td>
              <td id="punti">10</td>
              <td id="punti">37</td>          
            </tr>
            <tr>
              <td id="nomigc">MAGNUSSEN</td>
              <td id="puntig">5</td>
              <td id="puntig">9</td>
              <td id="puntig">14</td>
              <td id="puntig">9</td>
              <td id="puntig">16</td>
              <td id="puntig">17</td>
              <td id="puntig">RIT</td>
              <td id="puntig">RIT</td>
              <td id="puntig">17</td>
              <td id="puntig">10</td>
              <td id="puntig">8</td>
              <td id="puntig">RIT</td>
              <td id="puntig">16</td>
              <td id="puntig">16</td>
              <td id="puntig">15</td>
              <td id="puntig">16</td>
              <td id="puntig">12</td>
              <td id="puntig">14</td>
              <td id="puntig">9</td>
              <td id="puntig">17</td>
              <td id="puntig">RIT</td>
              <td id="puntig">17</td>
              <td id="puntig">25</td>   
            </tr>
            <tr>
              <td id="nomigs">GASLY</td>
              <td id="punti">RIT</td>
              <td id="punti">8</td>
              <td id="punti">9</td>
              <td id="punti">12</td>
              <td id="punti">RIT</td>
              <td id="punti">13</td>
              <td id="punti">11</td>
              <td id="punti">5</td>
              <td id="punti">14</td>
              <td id="punti">RIT</td>
              <td id="punti">15</td>
              <td id="punti">12</td>
              <td id="punti">12</td>
              <td id="punti">9</td>
              <td id="punti">11</td>
              <td id="punti">8</td>
              <td id="punti">10</td>
              <td id="punti">18</td>
              <td id="punti">14</td>
              <td id="punti">11</td>
              <td id="punti">14</td>
              <td id="punti">14</td>
              <td id="punti">23</td>     
            </tr>
            <tr>
              <td id="nomigc">STROLL</td>
              <td id="puntig">12</td>
              <td id="puntig">13</td>
              <td id="puntig">12</td>
              <td id="puntig">10</td>
              <td id="puntig">10</td>
              <td id="puntig">15</td>
              <td id="puntig">14</td>
              <td id="puntig">16</td>
              <td id="puntig">10</td>
              <td id="puntig">11</td>
              <td id="puntig">13</td>
              <td id="puntig">10</td>
              <td id="puntig">11</td>
              <td id="puntig">11</td>
              <td id="puntig">10</td>
              <td id="puntig">RIT</td>
              <td id="puntig">6</td>
              <td id="puntig">12</td>
              <td id="puntig">RIT</td>
              <td id="puntig">15</td>
              <td id="puntig">10</td>
              <td id="puntig">8</td>
              <td id="puntig">18</td>   
            </tr>
            <tr>
              <td id="nomigs">SCHUMACHER</td>
              <td id="punti">11</td>
              <td id="punti">NP</td>
              <td id="punti">13</td>
              <td id="punti">17</td>
              <td id="punti">15</td>
              <td id="punti">14</td>
              <td id="punti">RIT</td>
              <td id="punti">14</td>
              <td id="punti">RIT</td>
              <td id="punti">8</td>
              <td id="punti">6</td>
              <td id="punti">15</td>
              <td id="punti">14</td>
              <td id="punti">17</td>
              <td id="punti">13</td>
              <td id="punti">12</td>
              <td id="punti">13</td>
              <td id="punti">17</td>
              <td id="punti">15</td>
              <td id="punti">16</td>
              <td id="punti">13</td>
              <td id="punti">16</td>
              <td id="punti">12</td>       
            </tr>
            <tr>
              <td id="nomigc">TSUNODA</td>
              <td id="puntig">8</td>
              <td id="puntig">NP</td>
              <td id="puntig">15</td>
              <td id="puntig">7</td>
              <td id="puntig">12</td>
              <td id="puntig">10</td>
              <td id="puntig">17</td>
              <td id="puntig">13</td>
              <td id="puntig">RIT</td>
              <td id="puntig">14</td>
              <td id="puntig">16</td>
              <td id="puntig">RIT</td>
              <td id="puntig">19</td>
              <td id="puntig">13</td>
              <td id="puntig">RIT</td>
              <td id="puntig">14</td>
              <td id="puntig">RIT</td>
              <td id="puntig">13</td>
              <td id="puntig">10</td>
              <td id="puntig">RIT</td>
              <td id="puntig">17</td>
              <td id="puntig">11</td>
              <td id="puntig">12</td>   
            </tr>
            <tr>
              <td id="nomigs">GUANYU</td>
              <td id="punti">10</td>
              <td id="punti">11</td>
              <td id="punti">11</td>
              <td id="punti">15</td>
              <td id="punti">RIT</td>
              <td id="punti">RIT</td>
              <td id="punti">16</td>
              <td id="punti">RIT</td>
              <td id="punti">8</td>
              <td id="punti">RIT</td>
              <td id="punti">14</td>
              <td id="punti">16</td>
              <td id="punti">13</td>
              <td id="punti">14</td>
              <td id="punti">16</td>
              <td id="punti">10</td>
              <td id="punti">RIT</td>
              <td id="punti">16</td>
              <td id="punti">12</td>
              <td id="punti">13</td>
              <td id="punti">12</td>
              <td id="punti">12</td>
              <td id="punti">6</td>     
            </tr>
            <tr>
              <td id="nomigc">ALBON</td>
              <td id="puntig">13</td>
              <td id="puntig">14</td>
              <td id="puntig">10</td>
              <td id="puntig">11</td>
              <td id="puntig">9</td>
              <td id="puntig">18</td>
              <td id="puntig">RIT</td>
              <td id="puntig">12</td>
              <td id="puntig">13</td>
              <td id="puntig">RIT</td>
              <td id="puntig">12</td>
              <td id="puntig">13</td>
              <td id="puntig">17</td>
              <td id="puntig">10</td>
              <td id="puntig">12</td>
              <td id="puntig">SP</td>
              <td id="puntig">RIT</td>
              <td id="puntig">RIT</td>
              <td id="puntig">13</td>
              <td id="puntig">12</td>
              <td id="puntig">15</td>
              <td id="puntig">13</td>
              <td id="puntig">4</td>       
            </tr>
            <tr>
              <td id="nomigs">LATIFI</td>
              <td id="punti">16</td>
              <td id="punti">RIT</td>
              <td id="punti">16</td>
              <td id="punti">16</td>
              <td id="punti">14</td>
              <td id="punti">16</td>
              <td id="punti">15</td>
              <td id="punti">15</td>
              <td id="punti">16</td>
              <td id="punti">12</td>
              <td id="punti">RIT</td>
              <td id="punti">RIT</td>
              <td id="punti">18</td>
              <td id="punti">18</td>
              <td id="punti">18</td>
              <td id="punti">15</td>
              <td id="punti">RIT</td>
              <td id="punti">9</td>
              <td id="punti">17</td>
              <td id="punti">18</td>
              <td id="punti">16</td>
              <td id="punti">RIT</td>
              <td id="punti">2</td>     
            </tr>
            
            </table>
        </div>

        <div>
          <h1 id="titoloclassifica">CLASSIFICA PILOTI 2021</h1>
        </div>
        <div class="tabella">
          <table class="tab"; cellspacing ="0"; cellpadding ="0";>
            <tr>
              <td id="nomigs">PILOTI</td>
              <td id="gp"><img id="bandiera" src="../immagini/bahrain.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/italia.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/Bandiera-del-Portogallo.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/spagna.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/monaco.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/azerbaijan.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/Francia.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/stiria.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/Austria.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/uk.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/ungheria.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/belgio.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/Olanda.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/italia.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/Russia.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/bandiera-turchia.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/USA.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/messico.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/brasile.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/qatar.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/arabia.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/abudhabi.png"></td>             
              <td id="tot">TOT</td>
            </tr>
            <tr>
              <td id="nomigc">VERSTAPPEN</td>
              <td id="puntig">2</td>
              <td id="puntig">1</td>
              <td id="puntig">2</td>
              <td id="puntig">2</td>
              <td id="puntig">1</td>
              <td id="puntig">18</td>
              <td id="puntig">1</td>
              <td id="puntig">1</td>
              <td id="puntig">1</td>
              <td id="puntig">RIT</td>
              <td id="puntig">9</td>
              <td id="puntig">1</td>
              <td id="puntig">1</td>
              <td id="puntig">RIT</td>
              <td id="puntig">2</td>
              <td id="puntig">2</td>
              <td id="puntig">1</td>
              <td id="puntig">1</td>
              <td id="puntig">2</td>
              <td id="puntig">2</td>
              <td id="puntig">2</td>
              <td id="puntig">1</td>
              <td id="puntig">395.5</td>
            </tr>
            <tr>
              <td id="nomigs">HAMILTON</td>
              <td id="punti">1</td>
              <td id="punti">2</td>
              <td id="punti">1</td>
              <td id="punti">1</td>
              <td id="punti">7</td>
              <td id="punti">15</td>
              <td id="punti">2</td>
              <td id="punti">2</td>
              <td id="punti">4</td>
              <td id="punti">1</td>
              <td id="punti">2</td>
              <td id="punti">3</td>
              <td id="punti">2</td>
              <td id="punti">RIT</td>
              <td id="punti">1</td>
              <td id="punti">5</td>
              <td id="punti">2</td>
              <td id="punti">2</td>
              <td id="punti">1</td>
              <td id="punti">1</td>
              <td id="punti">1</td>
              <td id="punti">2</td>
              <td id="punti">387.5</td>    
            </tr>
            <tr>
              <td id="nomigc">BOTTAS</td>
              <td id="puntig">3</td>
              <td id="puntig">RIT</td>
              <td id="puntig">3</td>
              <td id="puntig">3</td>
              <td id="puntig">RIT</td>
              <td id="puntig">12</td>
              <td id="puntig">4</td>
              <td id="puntig">3</td>
              <td id="puntig">2</td>
              <td id="puntig">3</td>
              <td id="puntig">RIT</td>
              <td id="puntig">12</td>
              <td id="puntig">3</td>
              <td id="puntig">3</td>
              <td id="puntig">5</td>
              <td id="puntig">1</td>
              <td id="puntig">6</td>
              <td id="puntig">15</td>
              <td id="puntig">3</td>
              <td id="puntig">RIT</td>
              <td id="puntig">3</td>
              <td id="puntig">6</td>
              <td id="puntig">226</td>
            </tr>
            <tr>
              <td id="nomigs">PEREZ</td>
              <td id="punti">5</td>
              <td id="punti">11</td>
              <td id="punti">4</td>
              <td id="punti">5</td>
              <td id="punti">4</td>
              <td id="punti">1</td>
              <td id="punti">3</td>
              <td id="punti">4</td>
              <td id="punti">6</td>
              <td id="punti">16</td>
              <td id="punti">RIT</td>
              <td id="punti">19</td>
              <td id="punti">8</td>
              <td id="punti">5</td>
              <td id="punti">9</td>
              <td id="punti">3</td>
              <td id="punti">3</td>
              <td id="punti">3</td>
              <td id="punti">4</td>
              <td id="punti">4</td>
              <td id="punti">RIT</td>
              <td id="punti">RIT</td>
              <td id="punti">190</td>     
            </tr>
            <tr>
              <td id="nomigc">SAINZ</td>
              <td id="puntig">8</td>
              <td id="puntig">5</td>
              <td id="puntig">11</td>
              <td id="puntig">7</td>
              <td id="puntig">2</td>
              <td id="puntig">8</td>
              <td id="puntig">11</td>
              <td id="puntig">6</td>
              <td id="puntig">5</td>
              <td id="puntig">6</td>
              <td id="puntig">3</td>
              <td id="puntig">10</td>
              <td id="puntig">7</td>
              <td id="puntig">6</td>
              <td id="puntig">3</td>
              <td id="puntig">8</td>
              <td id="puntig">7</td>
              <td id="puntig">6</td>
              <td id="puntig">6</td>
              <td id="puntig">7</td>
              <td id="puntig">8</td>
              <td id="puntig">3</td>
              <td id="puntig">164.5</td>
            </tr>
            <tr>
              <td id="nomigs">NORRIS</td>
              <td id="punti">4</td>
              <td id="punti">3</td>
              <td id="punti">5</td>
              <td id="punti">8</td>
              <td id="punti">3</td>
              <td id="punti">5</td>
              <td id="punti">5</td>
              <td id="punti">5</td>
              <td id="punti">3</td>
              <td id="punti">4</td>
              <td id="punti">RIT</td>
              <td id="punti">14</td>
              <td id="punti">10</td>
              <td id="punti">2</td>
              <td id="punti">7</td>
              <td id="punti">7</td>
              <td id="punti">8</td>
              <td id="punti">10</td>
              <td id="punti">10</td>
              <td id="punti">9</td>
              <td id="punti">10</td>
              <td id="punti">7</td>
              <td id="punti">160</td>      
            </tr>
            <tr>
              <td id="nomigc">LECLERC</td>
              <td id="puntig">6</td>
              <td id="puntig">4</td>
              <td id="puntig">6</td>
              <td id="puntig">4</td>
              <td id="puntig">NP</td>
              <td id="puntig">4</td>
              <td id="puntig">16</td>
              <td id="puntig">7</td>
              <td id="puntig">8</td>
              <td id="puntig">2</td>
              <td id="puntig">RIT</td>
              <td id="puntig">8</td>
              <td id="puntig">5</td>
              <td id="puntig">4</td>
              <td id="puntig">15</td>
              <td id="puntig">4</td>
              <td id="puntig">4</td>
              <td id="puntig">5</td>
              <td id="puntig">5</td>
              <td id="puntig">8</td>
              <td id="puntig">7</td>
              <td id="puntig">10</td>
              <td id="puntig">159</td>
            </tr>
            <tr>
              <td id="nomigs">RICCIARDO</td>
              <td id="punti">7</td>
              <td id="punti">6</td>
              <td id="punti">9</td>
              <td id="punti">6</td>
              <td id="punti">12</td>
              <td id="punti">9</td>
              <td id="punti">6</td>
              <td id="punti">13</td>
              <td id="punti">7</td>
              <td id="punti">5</td>
              <td id="punti">11</td>
              <td id="punti">4</td>
              <td id="punti">11</td>
              <td id="punti">1</td>
              <td id="punti">4</td>
              <td id="punti">13</td>
              <td id="punti">5</td>
              <td id="punti">12</td>
              <td id="punti">RIT</td>
              <td id="punti">12</td>
              <td id="punti">5</td>
              <td id="punti">12</td>
              <td id="punti">115</td>      
            </tr>
            <tr>
              <td id="nomigc">GASLY</td>
              <td id="puntig">17</td>
              <td id="puntig">7</td>
              <td id="puntig">10</td>
              <td id="puntig">10</td>
              <td id="puntig">6</td>
              <td id="puntig">3</td>
              <td id="puntig">7</td>
              <td id="puntig">RIT</td>
              <td id="puntig">9</td>
              <td id="puntig">11</td>
              <td id="puntig">5</td>
              <td id="puntig">6</td>
              <td id="puntig">4</td>
              <td id="puntig">RIT</td>
              <td id="puntig">13</td>
              <td id="puntig">6</td>
              <td id="puntig">RIT</td>
              <td id="puntig">4</td>
              <td id="puntig">7</td>
              <td id="puntig">11</td>
              <td id="puntig">6</td>
              <td id="puntig">5</td>
              <td id="puntig">110</td>   
            </tr>
            <tr>
              <td id="nomigs">ALONSO</td>
              <td id="punti">RIT</td>
              <td id="punti">10</td>
              <td id="punti">8</td>
              <td id="punti">17</td>
              <td id="punti">13</td>
              <td id="punti">6</td>
              <td id="punti">8</td>
              <td id="punti">9</td>
              <td id="punti">10</td>
              <td id="punti">7</td>
              <td id="punti">4</td>
              <td id="punti">11</td>
              <td id="punti">6</td>
              <td id="punti">8</td>
              <td id="punti">6</td>
              <td id="punti">16</td>
              <td id="punti">RIT</td>
              <td id="punti">9</td>
              <td id="punti">9</td>
              <td id="punti">3</td>
              <td id="punti">13</td>
              <td id="punti">8</td>
              <td id="punti">81</td>            
            </tr>
            <tr>
              <td id="nomigc">OCON</td>
              <td id="puntig">13</td>
              <td id="puntig">9</td>
              <td id="puntig">7</td>
              <td id="puntig">9</td>
              <td id="puntig">9</td>
              <td id="puntig">RIT</td>
              <td id="puntig">14</td>
              <td id="puntig">14</td>
              <td id="puntig">RIT</td>
              <td id="puntig">9</td>
              <td id="puntig">1</td>
              <td id="puntig">7</td>
              <td id="puntig">9</td>
              <td id="puntig">10</td>
              <td id="puntig">14</td>
              <td id="puntig">10</td>
              <td id="puntig">RIT</td>
              <td id="puntig">13</td>
              <td id="puntig">8</td>
              <td id="puntig">5</td>
              <td id="puntig">4</td>
              <td id="puntig">9</td>
              <td id="puntig">74</td>   
            </tr>
            <tr>
              <td id="nomigs">VETTEL</td>
              <td id="punti">15</td>
              <td id="punti">15</td>
              <td id="punti">13</td>
              <td id="punti">13</td>
              <td id="punti">5</td>
              <td id="punti">2</td>
              <td id="punti">9</td>
              <td id="punti">12</td>
              <td id="punti">17</td>
              <td id="punti">RIT</td>
              <td id="punti">SQ</td>
              <td id="punti">5</td>
              <td id="punti">13</td>
              <td id="punti">12</td>
              <td id="punti">12</td>
              <td id="punti">18</td>
              <td id="punti">10</td>
              <td id="punti">7</td>
              <td id="punti">11</td>
              <td id="punti">10</td>
              <td id="punti">RIT</td>
              <td id="punti">11</td>
              <td id="punti">43</td>      
            </tr>
            <tr>
              <td id="nomigc">STROLL</td>
              <td id="puntig">10</td>
              <td id="puntig">8</td>
              <td id="puntig">14</td>
              <td id="puntig">11</td>
              <td id="puntig">8</td>
              <td id="puntig">RIT</td>
              <td id="puntig">10</td>
              <td id="puntig">8</td>
              <td id="puntig">13</td>
              <td id="puntig">8</td>
              <td id="puntig">RIT</td>
              <td id="puntig">20</td>
              <td id="puntig">12</td>
              <td id="puntig">7</td>
              <td id="puntig">11</td>
              <td id="puntig">9</td>
              <td id="puntig">12</td>
              <td id="puntig">14</td>
              <td id="puntig">RIT</td>
              <td id="puntig">6</td>
              <td id="puntig">11</td>
              <td id="puntig">13</td>
              <td id="puntig">34</td>   
            </tr>
            <tr>
              <td id="nomigs">TSUNODA</td>
              <td id="punti">9</td>
              <td id="punti">12</td>
              <td id="punti">15</td>
              <td id="punti">RIT</td>
              <td id="punti">16</td>
              <td id="punti">7</td>
              <td id="punti">13</td>
              <td id="punti">10</td>
              <td id="punti">12</td>
              <td id="punti">10</td>
              <td id="punti">6</td>
              <td id="punti">15</td>
              <td id="punti">RIT</td>
              <td id="punti">NP</td>
              <td id="punti">17</td>
              <td id="punti">14</td>
              <td id="punti">9</td>
              <td id="punti">RIT</td>
              <td id="punti">15</td>
              <td id="punti">13</td>
              <td id="punti">14</td>
              <td id="punti">4</td>
              <td id="punti">32</td>       
            </tr>
            <tr>
              <td id="nomigc">RUSSELL</td>
              <td id="puntig">14</td>
              <td id="puntig">RIT</td>
              <td id="puntig">16</td>
              <td id="puntig">14</td>
              <td id="puntig">14</td>
              <td id="puntig">17</td>
              <td id="puntig">12</td>
              <td id="puntig">RIT</td>
              <td id="puntig">11</td>
              <td id="puntig">12</td>
              <td id="puntig">8</td>
              <td id="puntig">2</td>
              <td id="puntig">17</td>
              <td id="puntig">9</td>
              <td id="puntig">10</td>
              <td id="puntig">15</td>
              <td id="puntig">14</td>
              <td id="puntig">16</td>
              <td id="puntig">13</td>
              <td id="puntig">17</td>
              <td id="puntig">RIT</td>
              <td id="puntig">RIT</td>
              <td id="puntig">16</td>   
            </tr>
            <tr>
              <td id="nomigs">RAIKKONEN</td>
              <td id="punti">11</td>
              <td id="punti">13</td>
              <td id="punti">RIT</td>
              <td id="punti">12</td>
              <td id="punti">11</td>
              <td id="punti">10</td>
              <td id="punti">17</td>
              <td id="punti">11</td>
              <td id="punti">15</td>
              <td id="punti">15</td>
              <td id="punti">10</td>
              <td id="punti">18</td>
              <td id="punti">SP</td>
              <td id="punti">0</td>
              <td id="punti">8</td>
              <td id="punti">12</td>
              <td id="punti">13</td>
              <td id="punti">8</td>
              <td id="punti">12</td>
              <td id="punti">14</td>
              <td id="punti">15</td>
              <td id="punti">RIT</td>
              <td id="punti">10</td>      
            </tr>
            <tr>
              <td id="nomigc">LATIFI</td>
              <td id="puntig">18</td>
              <td id="puntig">RIT</td>
              <td id="puntig">18</td>
              <td id="puntig">16</td>
              <td id="puntig">15</td>
              <td id="puntig">16</td>
              <td id="puntig">18</td>
              <td id="puntig">17</td>
              <td id="puntig">16</td>
              <td id="puntig">14</td>
              <td id="puntig">7</td>
              <td id="puntig">9</td>
              <td id="puntig">16</td>
              <td id="puntig">11</td>
              <td id="puntig">19</td>
              <td id="puntig">17</td>
              <td id="puntig">15</td>
              <td id="puntig">17</td>
              <td id="puntig">16</td>
              <td id="puntig">RIT</td>
              <td id="puntig">12</td>
              <td id="puntig">RIT</td>
              <td id="puntig">7</td>   
            </tr>
            <tr>
              <td id="nomigs">GIOVINAZZI</td>
              <td id="punti">12</td>
              <td id="punti">14</td>
              <td id="punti">12</td>
              <td id="punti">15</td>
              <td id="punti">10</td>
              <td id="punti">11</td>
              <td id="punti">15</td>
              <td id="punti">15</td>
              <td id="punti">14</td>
              <td id="punti">13</td>
              <td id="punti">13</td>
              <td id="punti">13</td>
              <td id="punti">14</td>
              <td id="punti">13</td>
              <td id="punti">16</td>
              <td id="punti">11</td>
              <td id="punti">11</td>
              <td id="punti">11</td>
              <td id="punti">14</td>
              <td id="punti">15</td>
              <td id="punti">9</td>
              <td id="punti">RIT</td>
              <td id="punti">3</td>           
            </tr>
            <tr>
              <td id="nomigc">SCHUMACHER</td>
              <td id="puntig">16</td>
              <td id="puntig">16</td>
              <td id="puntig">17</td>
              <td id="puntig">18</td>
              <td id="puntig">18</td>
              <td id="puntig">13</td>
              <td id="puntig">19</td>
              <td id="puntig">16</td>
              <td id="puntig">18</td>
              <td id="puntig">18</td>
              <td id="puntig">12</td>
              <td id="puntig">16</td>
              <td id="puntig">18</td>
              <td id="puntig">15</td>
              <td id="puntig">RIT</td>
              <td id="puntig">19</td>
              <td id="puntig">16</td>
              <td id="puntig">RIT</td>
              <td id="puntig">18</td>
              <td id="puntig">16</td>
              <td id="puntig">RIT</td>
              <td id="puntig">14</td>
              <td id="puntig">0</td>          
            </tr>
            </table>
        </div>

        <div>
          <h1 id="titoloclassifica">CLASSIFICA PILOTI 2020</h1>
        </div>
        <div class="tabella">
          <table class="tab"; cellspacing ="0"; cellpadding ="0";>
            <tr>
              <td id="nomigs">PILOTI</td>
              <td id="gp"><img id="bandiera" src="../immagini/Austria.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/stiria.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/ungheria.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/uk.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/uk.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/spagna.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/belgio.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/italia.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/italia.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/Russia.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/germania.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/Bandiera-del-Portogallo.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/italia.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/bandiera-turchia.jpg"></td>
              <td id="gp"><img id="bandiera" src="../immagini/bahrain.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/bahrain.png"></td>
              <td id="gp"><img id="bandiera" src="../immagini/abudhabi.png"></td>
              <td id="tot">TOT</td>
            </tr>
            <tr>
              <td id="nomigc">HAMILTON</td>
              <td id="puntig">4</td>
              <td id="puntig">1</td>
              <td id="puntig">1</td>
              <td id="puntig">1</td>
              <td id="puntig">2</td>
              <td id="puntig">1</td>
              <td id="puntig">1</td>
              <td id="puntig">7</td>
              <td id="puntig">1</td>
              <td id="puntig">3</td>
              <td id="puntig">1</td>
              <td id="puntig">1</td>
              <td id="puntig">1</td>
              <td id="puntig">1</td>
              <td id="puntig">1</td>
              <td id="puntig">0</td>
              <td id="puntig">3</td>
              <td id="puntig">347</td>

            </tr>
            <tr>
              <td id="nomigs">BOTTAS</td>
              <td id="punti">1</td>
              <td id="punti">2</td>
              <td id="punti">3</td>
              <td id="punti">11</td>
              <td id="punti">3</td>
              <td id="punti">3</td>
              <td id="punti">2</td>
              <td id="punti">5</td>
              <td id="punti">2</td>
              <td id="punti">1</td>
              <td id="punti">RIT</td>
              <td id="punti">2</td>
              <td id="punti">2</td>
              <td id="punti">14</td>
              <td id="punti">8</td>
              <td id="punti">8</td>
              <td id="punti">2</td>
              <td id="punti">223</td>

            </tr>
            <tr>
              <td id="nomigc">VERSTAPPEN</td>
              <td id="puntig">RIT</td>
              <td id="puntig">3</td>
              <td id="puntig">2</td>
              <td id="puntig">2</td>
              <td id="puntig">1</td>
              <td id="puntig">2</td>
              <td id="puntig">3</td>
              <td id="puntig">RIT</td>
              <td id="puntig">RIT</td>
              <td id="puntig">2</td>
              <td id="puntig">2</td>
              <td id="puntig">3</td>
              <td id="puntig">RIT</td>
              <td id="puntig">6</td>
              <td id="puntig">2</td>
              <td id="puntig">RIT</td>
              <td id="puntig">1</td>
              <td id="puntig">214</td>

            </tr>
            <tr>
              <td id="nomigs">PEREZ</td>
              <td id="punti">6</td>
              <td id="punti">6</td>
              <td id="punti">7</td>
              <td id="punti">0</td>
              <td id="punti">0</td>
              <td id="punti">5</td>
              <td id="punti">10</td>
              <td id="punti">10</td>
              <td id="punti">5</td>
              <td id="punti">4</td>
              <td id="punti">4</td>
              <td id="punti">7</td>
              <td id="punti">6</td>
              <td id="punti">2</td>
              <td id="punti">18</td>
              <td id="punti">1</td>
              <td id="punti">RIT</td>
              <td id="punti">125</td>

            </tr>
            <tr>
              <td id="nomigc">RICCIARDO</td>
              <td id="puntig">RIT</td>
              <td id="puntig">8</td>
              <td id="puntig">8</td>
              <td id="puntig">4</td>
              <td id="puntig">14</td>
              <td id="puntig">11</td>
              <td id="puntig">4</td>
              <td id="puntig">6</td>
              <td id="puntig">4</td>
              <td id="puntig">5</td>
              <td id="puntig">3</td>
              <td id="puntig">9</td>
              <td id="puntig">3</td>
              <td id="puntig">10</td>
              <td id="puntig">7</td>
              <td id="puntig">5</td>
              <td id="puntig">7</td>
              <td id="puntig">119</td>

            </tr>
            <tr>
              <td id="nomigs">SAINZ</td>
              <td id="punti">5</td>
              <td id="punti">9</td>
              <td id="punti">9</td>
              <td id="punti">13</td>
              <td id="punti">13</td>
              <td id="punti">6</td>
              <td id="punti">NP</td>
              <td id="punti">2</td>
              <td id="punti">RIT</td>
              <td id="punti">RIT</td>
              <td id="punti">5</td>
              <td id="punti">6</td>
              <td id="punti">7</td>
              <td id="punti">5</td>
              <td id="punti">5</td>
              <td id="punti">4</td>
              <td id="punti">6</td>
              <td id="punti">105</td>
            </tr>
            <tr>
              <td id="nomigc">ALBON</td>
              <td id="puntig">13</td>
              <td id="puntig">4</td>
              <td id="puntig">5</td>
              <td id="puntig">8</td>
              <td id="puntig">5</td>
              <td id="puntig">8</td>
              <td id="puntig">6</td>
              <td id="puntig">15</td>
              <td id="puntig">3</td>
              <td id="puntig">10</td>
              <td id="puntig">RIT</td>
              <td id="puntig">12</td>
              <td id="puntig">15</td>
              <td id="puntig">7</td>
              <td id="puntig">3</td>
              <td id="puntig">6</td>
              <td id="puntig">4</td>
              <td id="puntig">105</td>

            </tr>
            <tr>
              <td id="nomigs">LECLERC</td>
              <td id="punti">2</td>
              <td id="punti">RIT</td>
              <td id="punti">11</td>
              <td id="punti">3</td>
              <td id="punti">4</td>
              <td id="punti">RIT</td>
              <td id="punti">14</td>
              <td id="punti">RIT</td>
              <td id="punti">8</td>
              <td id="punti">6</td>
              <td id="punti">7</td>
              <td id="punti">4</td>
              <td id="punti">5</td>
              <td id="punti">4</td>
              <td id="punti">10</td>
              <td id="punti">RIT</td>
              <td id="punti">13</td>
              <td id="punti">98</td>
            </tr>
            <tr>
              <td id="nomigc">NORRIS</td>
              <td id="puntig">3</td>
              <td id="puntig">5</td>
              <td id="puntig">13</td>
              <td id="puntig">5</td>
              <td id="puntig">9</td>
              <td id="puntig">10</td>
              <td id="puntig">7</td>
              <td id="puntig">4</td>
              <td id="puntig">6</td>
              <td id="puntig">15</td>
              <td id="puntig">RIT</td>
              <td id="puntig">13</td>
              <td id="puntig">8</td>
              <td id="puntig">8</td>
              <td id="puntig">4</td>
              <td id="puntig">10</td>
              <td id="puntig">5</td>
              <td id="puntig">97</td>

            </tr>
            <tr>
              <td id="nomigs">GASLY</td>
              <td id="punti">7</td>
              <td id="punti">15</td>
              <td id="punti">RIT</td>
              <td id="punti">7</td>
              <td id="punti">11</td>
              <td id="punti">9</td>
              <td id="punti">8</td>
              <td id="punti">1</td>
              <td id="punti">RIT</td>
              <td id="punti">9</td>
              <td id="punti">6</td>
              <td id="punti">5</td>
              <td id="punti">RIT</td>
              <td id="punti">13</td>
              <td id="punti">6</td>
              <td id="punti">11</td>
              <td id="punti">8</td>
              <td id="punti">75</td>
            </tr>
            <tr>
              <td id="nomigc">STROLL</td>
              <td id="puntig">RIT</td>
              <td id="puntig">7</td>
              <td id="puntig">4</td>
              <td id="puntig">9</td>
              <td id="puntig">6</td>
              <td id="puntig">4</td>
              <td id="puntig">9</td>
              <td id="puntig">3</td>
              <td id="puntig">RIT</td>
              <td id="puntig">RIT</td>
              <td id="puntig">0</td>
              <td id="puntig">RIT</td>
              <td id="puntig">13</td>
              <td id="puntig">9</td>
              <td id="puntig">RIT</td>
              <td id="puntig">3</td>
              <td id="puntig">10</td>
              <td id="puntig">75</td>

            </tr>
            <tr>
              <td id="nomigs">OCON</td>
              <td id="punti">8</td>
              <td id="punti">RIT</td>
              <td id="punti">14</td>
              <td id="punti">6</td>
              <td id="punti">8</td>
              <td id="punti">13</td>
              <td id="punti">5</td>
              <td id="punti">8</td>
              <td id="punti">RIT</td>
              <td id="punti">7</td>
              <td id="punti">RIT</td>
              <td id="punti">8</td>
              <td id="punti">RIT</td>
              <td id="punti">11</td>
              <td id="punti">9</td>
              <td id="punti">2</td>
              <td id="punti">9</td>
              <td id="punti">62</td>
            </tr>
            <tr>
              <td id="nomigc">VETTEL</td>
              <td id="puntig">10</td>
              <td id="puntig">RIT</td>
              <td id="puntig">6</td>
              <td id="puntig">10</td>
              <td id="puntig">12</td>
              <td id="puntig">7</td>
              <td id="puntig">13</td>
              <td id="puntig">RIT</td>
              <td id="puntig">10</td>
              <td id="puntig">13</td>
              <td id="puntig">11</td>
              <td id="puntig">10</td>
              <td id="puntig">12</td>
              <td id="puntig">3</td>
              <td id="puntig">13</td>
              <td id="puntig">12</td>
              <td id="puntig">14</td>
              <td id="puntig">33</td>

            </tr>
            <tr>
              <td id="nomigs">KVJAT</td>
              <td id="punti">12</td>
              <td id="punti">10</td>
              <td id="punti">12</td>
              <td id="punti">RIT</td>
              <td id="punti">10</td>
              <td id="punti">12</td>
              <td id="punti">11</td>
              <td id="punti">9</td>
              <td id="punti">7</td>
              <td id="punti">8</td>
              <td id="punti">15</td>
              <td id="punti">19</td>
              <td id="punti">4</td>
              <td id="punti">12</td>
              <td id="punti">11</td>
              <td id="punti">7</td>
              <td id="punti">11</td>
              <td id="punti">32</td>
            </tr>
            <tr>
              <td id="nomigc">RAIKKONEN</td>
              <td id="puntig">RIT</td>
              <td id="puntig">11</td>
              <td id="puntig">15</td>
              <td id="puntig">17</td>
              <td id="puntig">15</td>
              <td id="puntig">14</td>
              <td id="puntig">12</td>
              <td id="puntig">13</td>
              <td id="puntig">9</td>
              <td id="puntig">14</td>
              <td id="puntig">12</td>
              <td id="puntig">11</td>
              <td id="puntig">9</td>
              <td id="puntig">15</td>
              <td id="puntig">15</td>
              <td id="puntig">14</td>
              <td id="puntig">12</td>
              <td id="puntig">4</td>
            </tr>
            <tr>
              <td id="nomigs">GIOVINAZZI</td>
              <td id="punti">9</td>
              <td id="punti">14</td>
              <td id="punti">17</td>
              <td id="punti">14</td>
              <td id="punti">17</td>
              <td id="punti">16</td>
              <td id="punti">RIT</td>
              <td id="punti">16</td>
              <td id="punti">RIT</td>
              <td id="punti">11</td>
              <td id="punti">10</td>
              <td id="punti">15</td>
              <td id="punti">10</td>
              <td id="punti">RIT</td>
              <td id="punti">16</td>
              <td id="punti">13</td>
              <td id="punti">16</td>
              <td id="punti">4</td>
            </tr>
            <tr>
              <td id="nomigc">RUSSELL</td>
              <td id="puntig">RIT</td>
              <td id="puntig">16</td>
              <td id="puntig">18</td>
              <td id="puntig">12</td>
              <td id="puntig">18</td>
              <td id="puntig">17</td>
              <td id="puntig">RIT</td>
              <td id="puntig">14</td>
              <td id="puntig">11</td>
              <td id="puntig">18</td>
              <td id="puntig">RIT</td>
              <td id="puntig">14</td>
              <td id="puntig">RIT</td>
              <td id="puntig">16</td>
              <td id="puntig">12</td>
              <td id="puntig">9</td>
              <td id="puntig">15</td>
              <td id="puntig">3</td>
            </tr>
            <tr>
              <td id="nomigs">GROSJEAN</td>
              <td id="punti">RIT</td>
              <td id="punti">13</td>
              <td id="punti">16</td>
              <td id="punti">16</td>
              <td id="punti">16</td>
              <td id="punti">19</td>
              <td id="punti">15</td>
              <td id="punti">12</td>
              <td id="punti">12</td>
              <td id="punti">17</td>
              <td id="punti">9</td>
              <td id="punti">17</td>
              <td id="punti">14</td>
              <td id="punti">RIT</td>
              <td id="punti">RIT</td>
              <td id="punti">INF</td>
              <td id="punti">0</td>
              <td id="punti">2</td>
            </tr>
            <tr>
              <td id="nomigc">MAGNUSSEN</td>
              <td id="puntig">RIT</td>
              <td id="puntig">12</td>
              <td id="puntig">10</td>
              <td id="puntig">RIT</td>
              <td id="puntig">RIT</td>
              <td id="puntig">15</td>
              <td id="puntig">17</td>
              <td id="puntig">RIT</td>
              <td id="puntig">RIT</td>
              <td id="puntig">12</td>
              <td id="puntig">13</td>
              <td id="puntig">16</td>
              <td id="puntig">RIT</td>
              <td id="puntig">17</td>
              <td id="puntig">17</td>
              <td id="puntig">15</td>
              <td id="puntig">18</td>
              <td id="puntig">1</td>        
            </tr>
            <tr>
              <td id="nomigs">LATIFI</td>
              <td id="punti">11</td>
              <td id="punti">17</td>
              <td id="punti">19</td>
              <td id="punti">15</td>
              <td id="punti">19</td>
              <td id="punti">18</td>
              <td id="punti">16</td>
              <td id="punti">11</td>
              <td id="punti">RIT</td>
              <td id="punti">16</td>
              <td id="punti">14</td>
              <td id="punti">18</td>
              <td id="punti">11</td>
              <td id="punti">RIT</td>
              <td id="punti">14</td>
              <td id="punti">RIT</td>
              <td id="punti">17</td>
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