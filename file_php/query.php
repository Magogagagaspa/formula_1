<?php
$connessione = new mysqli("localhost", "root", "", "formula_1");
$sql2 = "SELECT nome, cognome, foto, cod_pilota FROM piloti";
$ris2 = $connessione->query($sql2);
if($ris2->num_rows > 0){
    $infoPiloti = array();
    while($row = $ris2->fetch_assoc()){
        $infoPiloti[] = $row;
    }
}
$_SESSION['piloti'] = $infoPiloti;

?>