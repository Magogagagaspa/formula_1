<?php
    if(isset($_POST["nome"])) $nome = $_POST["nome"];  else $nome = "";
    if(isset($_POST["cognome"])) $cognome = $_POST["cognome"];  else $cognome = "";
    if(isset($_POST["email"])) $email = $_POST["email"]; else $email ="";
    if(isset($_POST["password"])) $password = $_POST["password"];  else $password = "";
    if(isset($_POST["conferma"])) $conferma = $_POST["conferma"];  else $conferma = "";
    if(isset($_SESSION["accesso"])) {$accesso = $_SESSION["accesso"];} else{$acceso = false;}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stile.css">
    <link rel="icon" type="img/png" href="../immagini/f11.png">
    <title>Pagina di iscrizione</title>
</head>
    <body>
        <header id="haccesso">
            <div class="logoaccesso">
                <a href="../home.php"><img src="../immagini/f1logo.png"></a>
            </div>
            <div class="cambio">
                <div class="cambio_a" id="accedi">
                   <a href="accesso.php">Accedi</a> 
                </div>
                <div class="cambio_a" id="registrati">
                <a href="iscrizione.php">Registrati</a> 
                </div>
            </div>
        </header>
            <div class="contenitore_iscrizione">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" id="formaccesso">
                    <label for="nome">Nome</label>
                    <input type="text" placeholder="Inserisci Nome" name="nome" id="nome" required>
                    <label for="cognome">Cognome</label>
                    <input type="text" placeholder="Inserisci Cognome" name="cognome" id="cognome" required>
                    <label for="email">Email</label>
                    <input type="email" placeholder="Inserisci email" name="email" id="email" required>
                    <label for="password">Password</label>
                    <input type="password" placeholder="Inserisci Password" name="password" id="password"  required>
                    <label for="conferma">Conferma password</label>
                    <input type="password" placeholder="Conferma password" name="conferma" id="password"  required>
                    <input type="submit" value="ISCRIVITI" id="bottone_dati">
                </form>
            </div>

  
    <p id="paccesso">
        <?php

        if(isset($_POST["email"]) AND isset($_POST["password"]) AND isset($_POST["nome"]) AND isset($_POST["cognome"]))
        {
            if($_POST["email"] === "" || $_POST["password"] === "" || $_POST["nome"] === "" || $_POST["cognome"] === "")
            {
                echo"Inserire dati";
            }
            else{

                if($password !== $conferma)
            {
                echo"Le password non corrispondono";
            }
            else
            {
                $connessione = new mysqli("localhost", "root", "", "formula_1");
                if($connessione->connect_error){
                    die("<p>Connessione al server non riuscita: ".$connessione->connect_error."</p>");
                }

                 $myquery = "SELECT email
						    FROM utente 
						    WHERE email=' $email '";

                    $ris = $connessione->query($myquery);

                    $num_rows = mysqli_num_rows($ris);

                if($num_rows > 0)
                {
                    echo"Questa email è già in uso";
                }
                else
                {
                        $myquery = "INSERT INTO utente (nome, cognome, password, email)
                            VALUES ('$nome', '$cognome', '$password', '$email')";

                        if ($connessione->query($myquery) === true) {
                        session_start();
                        $_SESSION["email"]=$email;
                        $_SESSION["accesso"] = true;
                        
                        $connessione->close();

                        echo "Registrazione effettuata con successo!<br>sarai ridirezionato alla home.";
                        header('Refresh: 0.5; URL=home_accesso.php');

                    } else {
                        echo "Non è stato possibile effettuare la registrazione per il seguente motivo: " . $connessione->error;
                    }       
                }
                
              }
            }
        }
            
        ?>
    </p>

    </body>

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
</html>
