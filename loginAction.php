<?php
require('actions/connexion.php');
if(isset($_POST['validate'])){
  
    if(!empty($_POST['name']) AND !empty($_POST['Prenom']) AND !empty($_POST['Date_de_naissance']) AND !empty($_POST['sexe'])
     AND !empty($_POST['email']) AND !empty($_POST['mot_de_passe'])){
      $user_Nom = htmlspecialchars($_POST['Nom']);
      $user_Prenom = htmlspecialchars($_POST['Prenom']);
      $user_Date_de_naissance = htmlspecialchars($_POST['Date_de_naissance']);
      $user_sexe = htmlspecialchars($_POST['sexe']);
      $user_email = htmlspecialchars($_POST['email']);
      $user_mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);

      $checkIfUserAlreadyExists = $bdd->prepare('SELECT Nom FROM plan WHERE Nom = ?');
      $checkIfUserAlreadyExists->execute(array($user_Nom));
      if($checkIfUserAlreadyExists)->rowCount( == 0){
         $insertUserOnWebsite = $bdd->prepare('INSERT INTO plan(Nom, Prenom, Date_de_naissance, sexe, email, mot_de_passe)VALUES(?, ?, ?, ?, ?, ?)');
         $insertUserOnWebsite->execute(array($user_Nom, $user_Prenom, $user_Date_de_naissance, $user_sexe, $user_email, $user_mot_de_passe ));
      }
     }else{
      $errorMsg =l"utilisateur existe deja sur le site";-
      
        $errorMsg = " veuillez completer tous les champs..";
     }
}
?>