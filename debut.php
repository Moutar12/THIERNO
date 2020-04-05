
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="">Veuillez saisir une Phrase</label><br>
    <textarea name="texte" id="" cols="30" rows="10"></textarea><br><br>
    <button type="submit" name="btn">Valider</button>
    </form>
    
</body>
</html>
<?php
include("fonction.php");

    if(isset($_POST['texte'])){
    $message = '';
    $phrases = 0;
        $phrases = $_POST['texte'];
        if (!is_chaine_alpha($phrases)){
            $message = 'Veuillez saisir une phrase !';
        }elseif (is_empty($phrases)) {
            $message = 'Champ obligatoire';
        }
        echo "<p style='color:red;'>".$message."</p>";
    }
    
    if(isset($_POST['btn'])){
    if(is_phrase_correct($phrases) && !espceInutile($phrases)){
         echo "La phrase n'est pas valide";
    }else{
        echo $phrases;
    }
}
   
?>


