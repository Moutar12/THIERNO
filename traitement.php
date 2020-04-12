







<?php
$file="fichier.json";
$data=file_get_contents($file,true);
$objet = json_decode($data);

if(isset($_POST['submit'])){
$login=$_POST['login'];
$Mdp=$_POST['motdepasse'];
if(empty($logi) || empty($Mdp)){
    header("Location:authentification.php");
}
if(!empty($_POST['login']) && (!empty($_POST['motdepasse']))){
    foreach($objet as $cle=>$value){
        if($login==$value['adress'] && $Mdp==$value['Mdp'] && $value['role']=="admin"){
            header("Location:admin.php");
        }else{
            header("Location:joueur.php");
        }
        
    }
}
}



?>