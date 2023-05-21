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
      <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
      <title>FANTASY</title>
  </head>

    <body>
        <?php
            if(!isset($_SESSION["email"]))
            {
            
            }
        ?>

        <?php
        include('../script_header_footer/script_header.php')
        ?>


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
            <div class="contenitore_piloti" class="reveal">
                
                <ul>
                    <li class="reveal"><input type="image" src="../immagini/verstappenpilota.png" alt="" class="fotopilota" type="checkbox"></li>
                    <li class="reveal"><input type="image" src="../immagini/perezpilota.png" alt="" class="fotopilota" ></li>
                    <li class="reveal"><input type="image" src="../immagini/leclercpilota.png" alt="" class="fotopilota"></li>
                    <li class="reveal"><input type="image"src="../immagini/sainzpilota.png" alt="" class="fotopilota"></li>
                    <li class="reveal"><input type="image" src="../immagini/hamiltonpilota.png" alt="" class="fotopilota"></li>
                    <li class="reveal"><input type="image" src="../immagini/russellpilota.png" alt="" class="fotopilota"></li>
                    <li class="reveal"><input type="image" src="../immagini/piastripilota.png" alt="" class="fotopilota"></li> 
                    <li class="reveal"><input type="image" src="../immagini/oconpilota.png" alt="" class="fotopilota"></li> 
                    <li class="reveal"><input type="image" src="../immagini/bottaspilota.png" alt="" class="fotopilota"></li>  
                    <li class="reveal"><input type="image" src="../immagini/zhoupilota.png" alt="" class="fotopilota"></li>
                    <li class="reveal"><input type="image" src="../immagini/alonsopilota.png" alt="" class="fotopilota"></li>
                    <li class="reveal"><input type="image" src="../immagini/strollpilota.png" alt="" class="fotopilota"></li>
                    <li class="reveal"><input type="image" src="../immagini/kevinpilota.png" alt="" class="fotopilota"></li>
                    <li class="reveal"><input type="image" src="../immagini/hulkenbergpilota.png" alt="" class="fotopilota"></li>
                    <li class="reveal"><input type="image" src="../immagini/yukipilota.png" alt="" class="fotopilota"></li>
                    <li class="reveal"><input type="image" src="../immagini/devriespilota.png" alt="" class="fotopilota"></li>
                    <li class="reveal"><input type="image"src="../immagini/albonpilota.png" alt="" class="fotopilota"></li>
                    <li class="reveal"><input type="image" src="../immagini/sargeantpilota.png" alt="" class="fotopilota"></li>
            </ul>

            </div>

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
    $(document).ready(function(){
           
           $(".contenitore_piloti").click(function(e){
              
               $(".contenitore_fantasy").toggleClass('.contenitore_piloti_input');
               e.preventDefault();
           });
       });
       ScrollReveal().reveal('.reveal', { distance: '50px', duration: 1000, easing: 'cubic-bezier(0.5, 0, 0, 1)' ,interval: 300 });
        ScrollReveal().reveal('.zoom', {  duration: 1500, easing: 'cubic-bezier(0.5, 0, 0, 1)' ,interval: 200, scale: 0.65});
    </script>



    </body>


</html>