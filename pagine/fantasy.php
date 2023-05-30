<?php
    session_start();
    
    require_once('../file_php/dati_connessione.php');

    if(isset($_SESSION["email"]))
    {
        $email = $_SESSION["email"];
    }
    if(isset($_SESSION["accesso"])) $accesso = $_SESSION["accesso"]; else $acceso = false;
    if(isset($_SESSION["piloti"])) $infoPiloti = $_SESSION["piloti"];
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
            if(!isset($_SESSION["email"]))
            {
                // $_SESSION["accesso"] = $acceso;
                // if($accesso === false)
                // {
                       echo <<<EOD
                <div class="contenitore_fantasy">
                <div class="titolo_fnt">
                     <h1>BENVENUTO AL F1 FANTASY</h1>
                </div>

                <div class="testi_fnt">
                <h2 id="titoli"> COS'É IL F1 FANTASY</h2>  
                <p id="text" >Il F1 Fantasy è un gioco online basato sulla Formula 1, che consente agli appassionati di vivere un'esperienza simile a quella di un proprietario di una squadra di Formula 1.

                    Nel F1 Fantasy, i partecipanti possono creare la propria squadra selezionando piloti e squadre che competono nel Campionato Mondiale di Formula 1. Ogni pilota e squadra ha un costo virtuale associato, basato sulle prestazioni passate e sulle aspettative per la stagione in corso. Ai partecipanti viene dato un budget virtuale limitato per comporre la squadra, il che richiede una gestione oculata delle risorse disponibili.
                </p>
                <p id="text">
                Le prestazioni della squadra nel F1 Fantasy sono basate sulle vere prestazioni dei piloti e delle squadre nel campionato reale. I punti vengono assegnati in base a criteri come la posizione in griglia, la posizione finale nella gara, i giri più veloci e altri fattori legati alle prestazioni durante il weekend di gara.
                </p> 
                <p id="text">I partecipanti possono competere con altri giocatori in leghe private o in classifiche globali. Possono anche apportare modifiche alla propria squadra tra una gara e l'altra per adattarsi alle prestazioni in corso dei piloti e delle squadre.

                    Il F1 Fantasy offre ai fan della Formula 1 l'opportunità di mettere alla prova le proprie abilità di gestione e strategia, nonché di competere con amici e appassionati di tutto il mondo per raggiungere la posizione più alta nelle classifiche. È un modo coinvolgente per seguire il campionato e aumentare l'interesse per ogni gara, poiché i partecipanti hanno un coinvolgimento personale nelle prestazioni dei piloti e delle squadre che hanno selezionato.
                 </div>

                <div class="testo_iscrizione">
                    PER PARTECIPARE AL F1 FANTASY E CREARE LA TUA SQUADRA <a href="accesso.php">ACCEDI</a> AL TUO ACCOUNT E SE NON NE HAI UNO <a href="iscrizione.php">ISCRIVITI</a>
                </div>
                EOD;
                }
             
            // }
            else
            {
                $connessione = new mysqli("localhost", "root", "", "formula_1");
                if($connessione->connect_error)
                {
                    die("<p>Connessione al server non riuscita: ".$connessione->connect_error."</p>");
                }                
                  
                    echo' 
                    <div class="contenitore_fantasy_2">
                    <div class="titolo_fnt_2">
                         <h1>BENVENUTO AL F1 FANTASY</h1>
                    </div>
                    <div class="contieni_titolof">
                    <h2 id="titolino">CREA LA TUA </h2><h2 id="tit_sq">SQUADRA</h2>
                    
                    </div>
                    <div class="contieni_titolof">
                    <h2 id="titolino">SELEZIONA</h2><h2 id="tit_sq">5 PILOTI</h2>
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
                        <label for"nome_sq" id="label_sq">NOME SQUADRA</label>
                        <input type="text" placeholder="NOME SQUADRA" name="nome_squadra" id="nome_sq" required>
                        <input type="submit" value="CREA" id="bottone_crea">
                    </form>   
                     </div>
                     </div>
                    ';
<<<<<<< HEAD
                        if(isset($_POST["pilota"]) && isset($_POST["nome_squadra"]))
                        {
                            $nome_squadra = $_POST["nome_squadra"];
                           $pilot = array();
                           foreach($_POST["pilota"] as $indice => $valore)
                           {
                            $pilot[] = $infoPiloti[$indice]["cod_pilota"];
                           }
                               
                        if(count($pilot) === 5)
                        {
                        $mysql = "INSERT INTO squadra (nome_sq, pilota1, pilota2, pilota3, pilota4, pilota5, email_utente)
                        VALUES ('$nome_squadra', '$pilot[0]', '$pilot[1]', '$pilot[2]', '$pilot[3]', '$pilot[4]', '$email')
                        ";
                        
                        if($connessione->query($mysql) === true)
                        {
                            
                            $squadra = $_POST['pilota'];
                            $_SESSION['squadra'] = $squadra;
                            $nome_squadra= $_POST["nome_squadra"];
                            $_SESSION["nome_squadra"] = $nome_squadra;
                            header("Refresh 0.5; URL=squadra.php");
                        }
=======
                    if(isset($_POST['pilota']) && COUNT($_POST['pilota']) === 5)
                    {
                        $squadra = $_POST['pilota'];
                        $nome_squadra = $_POST["nome_squadra"];
                        header("Refresh 0.5; URL=squadra.php");
>>>>>>> 5e2fe642e4b8962913ae9485abd9262cda11f9a5
                    } 
                        }
                     
                    
                  
                }     
              
            
?>
<script src="../script_header_footer/script_footer.js"></script>
            }
        ?>
            <!-- <form action="" class="contenitore_piloti">

                <table cellspacing="10">
                    <th colspan="5">Crea la tua squadra:</th>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </form>
            <form action="" class="contenitore_piloti_tab">
                <table>
                <tr>
                    <td><img src="../immagini/verstappenpilota.png" alt="" class="fotopilota"></td>
                    <td><img src="../immagini/perezpilota.png" alt="" class="fotopilota"></td>
                    <td><img src="../immagini/leclercpilota.png" alt="" class="fotopilota"></td>
                    <td><img src="../immagini/devriespilota.png" alt="" class="fotopilota"></td>

                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td><img src="../immagini/sainzpilota.png" alt="" ></td>
                    <td><img src="../immagini/hamiltonpilota.png" alt="" ></td>
                    <td><img src="../immagini/russellpilota.png" alt="" ></td>
                    <td><img src="../immagini/piastripilota.png" alt="" ></td>
                    
                </tr>
                <tr>
                    <td><input type="checkbox"  checked></td>
                    <td><input type="checkbox" ></td>
                    <td><input type="checkbox" ></td>
                    <td><input type="checkbox" ></td>
                </tr>
                <tr>
                    <td><img src="../immagini/oconpilota.png" alt="" class="fotopilota"></td>
                    <td><img src="../immagini/bottaspilota.png" alt="" class="fotopilota"></td>
                    <td><img src="../immagini/zhoupilota.png" alt="" class="fotopilota"></td>
                    <td><img src="../immagini/alonsopilota.png" alt="" class="fotopilota"></td>
                    
                    
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td><img src="../immagini/strollpilota.png" alt="" class="fotopilota"></td>
                    <td><img src="../immagini/kevinpilota.png" alt="" class="fotopilota"></td>
                    <td><img src="../immagini/hulkenbergpilota.png" alt="" class="fotopilota"></td>
                    <td><img src="../immagini/yukipilota.png" alt="" class="fotopilota"></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td colspan="2"><img src="../immagini/albonpilota.png" alt="" class="fotopilota" id="albon"></td>
                    <td colspan="2"><img src="../immagini/sargeantpilota.png" alt="" class="fotopilota" id="sargeant"> </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="checkbox"></td>
                    <td colspan="2"><input type="checkbox"></td>
                    
                </tr>
                </table>
            </form> -->


            </div>
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

       ScrollReveal().reveal('.reveal', { distance: '50px', duration: 1000, easing: 'cubic-bezier(0.5, 0, 0, 1)' ,interval: 300 });
        ScrollReveal().reveal('.zoom', {  duration: 1500, easing: 'cubic-bezier(0.5, 0, 0, 1)' ,interval: 200, scale: 0.65});
    </script>



    </body>


</html>