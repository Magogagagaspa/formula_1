<?php
    session_start();
    
    require_once('../file_php/dati_connessione.php');

    if(isset($_SESSION["email"])) $email = $_SESSION["email"];
    if(isset($_SESSION["password"])) $password = $_SESSION["password"];
    if(isset($_SESSION["nome"])) $nome = $_SESSION["nome"];
    if(isset($_SESSION["cognome"])) $cognome = $_SESSION["cognome"];
    if(isset($_SESSION["accesso"])) $accesso = $_SESSION["accesso"]; else $acceso = false;
    $risqu = mysqli_fetch_assoc(mysqli_query($connessione, "SELECT * FROM utente WHERE email = '$email'"));

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["modifica_cognome"])  && $_POST["modifica_cognome"] !== "")
    {                    
            $connessione = new mysqli("localhost", "root", "", "formula_1");

            $modifica_cognome = $_POST["modifica_cognome"];
                        
            $sql1 = "UPDATE utente SET cognome = '$modifica_cognome' WHERE email='" . $email . "'";
            
            $ris1 = $connessione->query($sql1);
            
            if($ris1)
            {
                $_SESSION["cognome"] = $modifica_cognome;
                
            }
            else
            {
                echo"errore";
            }
            $cognome = $modifica_cognome;
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["modifica_nome"])  && $_POST["modifica_nome"] !== "")
    {
        

            $connessione = new mysqli("localhost", "root", "", "formula_1");

            $modifica_nome = $_POST["modifica_nome"];
                      
            $sql = "UPDATE utente SET nome = '$modifica_nome' WHERE email='" . $email . "'";
            
            $ris = $connessione->query($sql);
          
            if($ris)
            {
               $_SESSION["nome"] = $modifica_nome;
              
            //    header("Refresh: 1;");
            }
            else
            {
               echo"errore";
            }
            $nome = $modifica_nome;
    }

    
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["modifica_password"])  && $_POST["modifica_password"] !== "")
    {                    
            $connessione = new mysqli("localhost", "root", "", "formula_1");

            $modifica_password = $_POST["modifica_password"];
                      
            $sql2 = "UPDATE utente SET password = '$modifica_password' WHERE email='" . $email . "'";
            
            $ris2 = $connessione->query($sql2);
          
            if($ris2)
            {
               $_SESSION["password"] = $modifica_password;

            }
            else
            {
               echo"errore";
            }
            $password = $modifica_password;
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stile.css">
    <link rel="icon" type="img/png" href="../immagini/f11.png">
    <title>Area personale</title>
</head> 
    <body>
        <?php
            include('../script_header_footer/script_header.php');
        ?>
        <div class="contenitore_area_personale">
        <?php
            $sql2 = "SELECT nome, cognome, email, password, immagine_profilo FROM utente WHERE email = '$email'";
    
            $ris2 = $connessione->query($sql2) or die("<p>Query fallita!</p>");
            
            $utente = array();

            while($row2 = $ris2->fetch_assoc()){
                $utente[] = $row2;
            }
            $nome = $utente[0]["nome"];
            $img = $utente[0]["immagine_profilo"];
            $email = $utente[0]["email"];
            ?>


            <form action="" id = "form_img" method="post" enctype="multipart/form-data">
                <div class="contenitore_img">
                    <img src="../immagini/immagini_profilo/<?php echo $img; ?>" id="immaginiprf">
                </div>
                <input type="hidden" name="nome" value = "<?php echo $nome; ?>">
                <input type="hidden" name="email" value = "<?php echo $email; ?>">
                <input type="file" name="imgprf" id="input_img_prf" accept=".jpg, .jpeg, .png">

            </form>
            <script type="text/javascript">
                document.getElementById("input_img_prf").onchange = function(){
                    document.getElementById("form_img").submit();
                }
            </script>

            <?php
                if(isset($_FILES["imgprf"]["name"]))
                {
                    $email = $_POST["email"];
                    $nome = $_POST["nome"];

                    $nomeImg = $_FILES["imgprf"]["name"];
                    $tmpnome= $_FILES["imgprf"]["tmp_name"];
                    $estensione = explode('.', $nomeImg);
                    $estensione = strtolower(end($estensione));

                    $NuovaImmagine = $nome . " - " .date("Y.m.d") ." - " . date("h.i.s");
                    $NuovaImmagine .= "." . $estensione;
                    $query = "UPDATE utente SET immagine_profilo = '$NuovaImmagine' WHERE email = '$email'";
                    mysqli_query($connessione, $query);
                    move_uploaded_file($tmpnome, '../immagini/immagini_profilo/' .$NuovaImmagine);

                    echo "
                        <script>
                            document.location.href = 'pagina_area_personale.php';
                        </script>
                    ";
                }
            ?>
        
            <div class="info">
                    <?php
                        $connessione = new mysqli("localhost", "root", "", "formula_1");

                        if($connessione->connect_error){
                          die("<p>Connessione al server non riuscita: ".$connessione->connect_error."</p>");
                        }
    
                        $sql = "SELECT nome, cognome, email, password FROM utente WHERE email = '$email'";
    
                        $ris = $connessione->query($sql) or die("<p>Query fallita!</p>");
    
                        foreach($ris as $riga)
                        {
                          echo '
                            <div class="contenitore_info">

                                <div class="credenziali">
                                    <p>Nome: '.$riga["nome"].'</p>
                                    <p>Cognome: ' .$riga["cognome"].'</p>
                                    <p>Email: ' .$riga["email"].'</p>
                                    <p>Password: '.$riga["password"].'</p>
                                </div>

                                <div class="contieni_edit">
                                    <div class="edit" id="mnome"> <a href="">Modifica nome</a> </div>
                                    <div class="edit" id="mcognome"> <a href="">Modifica cognome</a> </div>
                                    <div class="edit" id="mpassword"> <a href="">Modifica password</a> </div>

                                </div>

                             
                            </div><div class="modifican">
                            <form action="'. $_SERVER['PHP_SELF'] .'"  method="post" id="form_modifica">
                               <input type="text" placeholder="Modifica" name="modifica_nome">
                               <input type="submit" value="Conferma modifica" id="bottone_modifica">
                            </form>
                           </div>

                           <div class="modificac">
                           <form action="'. $_SERVER['PHP_SELF'] .'" method="post" id="form_modifica">
                              <input type="text" placeholder="Modifica" name="modifica_cognome">
                              <input type="submit" value="Conferma modifica" id="bottone_modifica">
                           </form>
                          </div>

                         <div class="modificap">
                         <form action="'. $_SERVER['PHP_SELF'] .'" method="post" id="form_modifica">
                            <input type="text" placeholder="Modifica" name="modifica_password">
                            <input type="submit" value="Conferma modifica" id="bottone_modifica">
                         </form>
                        </div>
                        </div>
                            ';  
                            
                        }


                     ?>
            </div>
        </div>

    </div>
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

    

<script>
        $(document).ready(function(){

            $("#mnome").click(function(e){

                $(".modifican").toggleClass('apri');
                
                  

                e.preventDefault();

            });

        });
    </script>

    <script>
        $(document).ready(function(){

            $("#mcognome").click(function(e){

                $(".modificac").toggleClass('apri');
                
                  

                e.preventDefault();

            });

        });
    </script>
    <script>
        $(document).ready(function(){

            $("#memail").click(function(e){

                $(".modificae").toggleClass('apri');
                
                  

                e.preventDefault();

            });

        });
    </script>
    <script>
        $(document).ready(function(){

            $("#mpassword").click(function(e){

                $(".modificap").toggleClass('apri');
                
                  

                e.preventDefault();

            });

        });
    </script>
    </body>
</html>

