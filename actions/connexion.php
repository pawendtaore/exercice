<?php 
// $host = 'localhost';
// $dbname = 'consolidation';
// $username = 'root';
// $password = '';

try{
    $bdd = new PDO('mysql:host=localhost;dbname=gestion;charset=utf8;', 'root', '');
} catch(Exception $e){
    die('une erreur a été trouvée :' . $e->getMessage());
}        

?>