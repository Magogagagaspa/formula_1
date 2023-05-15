<?php
    session_start();
    
    require_once('../file_php/dati_connessione.php');

    if(isset($_SESSION["email"])) $email = $_SESSION["email"];
    if(isset($_SESSION["password"])) $password = $_SESSION["password"];
    if(isset($_SESSION["nome"])) $nome = $_SESSION["email"];
    if(isset($_SESSION["cognome"])) $cognome = $_SESSION["cognome"];
    if(isset($_SESSION["accesso"])) $accesso = $_SESSION["accesso"]; else $acceso = false;

    
   

 
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        

            $connessione = new mysqli("localhost", "root", "", "formula_1");
                
            echo"ciao";

            $modifica_nome = $_POST["modifica_nome"];

            echo"ciao";
    
            $sql = "UPDATE utente SET nome = '$modifica_nome' WHERE email='" . $email . "'";
            
            $ris = $connessione->query($sql);
            echo"ciao";
            if($ris)
            {
               $_SESSION["nome"] = $modifica_nome;
               echo"Nome cambiato con successo";
            }
            else
            {
               echo"errore";
            }
    }
    
?>



