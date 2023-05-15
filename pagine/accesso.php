<?php

    session_start();

    if(isset($_POST["email"])) {$email = $_POST["email"];} else {$email = "";}
    if(isset($_POST["password"])) {$password = $_POST["password"];} else {$password = "";}
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
    <title>Pagina di accesso</title>
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
    <div class="contenitore_pagina_accesso">
    <div class="contenitore_accesso" id="contenitoreacc">
        <div class="contenitore_form">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" id="formaccesso">
                <label for="email">Email</label>
                <input type="email" placeholder="Inserisci email" name="email" id="email" required>
                <label for="password">Password</label>
                <input type="password" placeholder="Inserisci password" name="password" id="password" required>
                <input type="submit" value="Accedi" id="bottone_dati">
            </form>
        </div>
    </div>


    <p id="paccesso">
        <?php

        if(isset($email) && isset($password))
        {
            if($email !== "" && $password !== "")
            {
                $connessione = new mysqli("localhost", "root", "", "formula_1");

                if($connessione->connect_error)
                {
                    die("<p>Connessione al server non riuscita: ".$connessione->connect_error."</p>");
                }
    
                $sql = "SELECT email, password FROM utente WHERE email = '$email' AND password = '$password'";
                
    
                $ris = $connessione->query($sql) or die("<p>Query fallita! ".$conn->error."</p>");            
    
                // $num_rows = mysqli_num_rows($ris);
                // $num_rows = $ris->num_rows;
                if($ris->num_rows == 0)
                {
                    echo"Utente non trovato";
                    $connessione->close();
                   
                }
                else
                {   
                    $_SESSION["email"] = $email;
                    $_SESSION["accesso"] = $accesso = true;
    
                    $connessione->close();
                    header('refresh:0.5; URL=home_accesso.php');
                }  
            }
           

        }
        ?>
    </p>    
    </div>

    </body>

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
</html>
<?php
    $connessione->close();
?>