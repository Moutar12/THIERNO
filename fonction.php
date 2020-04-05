<?php
require_once("const.php");

function long_chaine($chaine){
    if (isset($chaine)){
		$i=0;
		for($j=0; isset($chaine[$i]); $j++) {
			$i++;
		}
	return $i;
	}
}
function is_car_numeric ($c){
    if ($c > '0' &&  $c <= '9'){
        return true;
    }
    return false;
}
function is_car_alpha($lettre){
    if(long_chaine($lettre)==1){
    return($lettre>="a" && $lettre<="z") || ($lettre>="A" && $lettre<="Z");
  
}
return false;
}
function is_maj_alpha($caractre){
    if(long_chaine($caractre)){
        return($caractre=="A" && $caractre=="Z");
    }
    return false;
}
function is_chaine_alpha($chaine){
    for($i=0;$i<long_chaine($chaine);$i++){
        if(!is_car_alpha($chaine[$i])){
            return false;
        }
    }
    return true;
}
function is_chaine_numeric($chaine){
    for ($i=0;$i<long_chaine($chaine);$i++){
        if (!is_car_numeric($chaine[$i])){
            return false;
        }
    }
    return true;
}
function is_car_present_in_chaine($car, $chaine){
    for ($i=0;$i<long_chaine($chaine);$i++){
        if ($chaine[$i]== $car){
            return true;
        }
    }
    return false;
}
function invers_car_case($car){
    $min = 'a';
    $max = 'A';
    if(long_chain($car)==1){
       for ($i=0; $i < 26; $i++) { 
           if ($car==$min) {
               return $max;
           }elseif ($car==$max) {
               return $min;
           }
           $min++;
           $max++;
       }
    }
    return $car;
}
function is_empty($chaine){
    if(long_chaine($chaine)==0){
        return true;
    }
    return false;
}
function delete_spc_before_after($chaine){
    $debut=0;
    $fin=long_chaine($chaine)-1;
    $newChaine = '';

    if($chaine==''){ return $chaine; }

    while ($chaine[$debut]==' '){
        $debut++; 
        if(!isset($chaine[$debut])){
            return '';
        } 
    }

    while ($chaine[$fin]==' '){ $fin--; }
    
    
    for ($i=$debut; $i <=$fin ; $i++) { 
        $newChaine.=$chaine[$i];
    }
    return $newChaine;
}
function is_phrase_correct($text){
    //Nous allons recuperer une phrase avec l'ensemble des regles 
    preg_match_all("#[A-Za-z]{1}[^.!?]*[.!?][^0-9]#im",$text,$phrase);
   $tab=[];
   foreach($phrase[0] as $val){
       array_push($tab, ucfirst($val));
   }
   return;
}
function espceInutile($phrase)
{
    //Sauvegarder le texte corrige dans une variable $texte
    $textecorrect="";
    //verifiction de deux espace successive ou plus
    $longphrase = preg_replace("#\s\s+#", ' ', $phrase);
    for($i=0;$i< strlen($longphrase);$i++)
    {
        //Suprimer les espace apres
        if($longphrase[$i]=='\'' && $longphrase[$i+1]==' '){
            $textecorrect.=$longphrase[$i+1];
            $i+=2;
        }elseif($longphrase[$i]==' ' && $longphrase[$i+1]=='\''){
            $i++;
        }
        elseif($longphrase[$i]==',' || $longphrase[$i]==';' || $longphrase[$i]==':'){
            $textecorrect.=$longphrase[$i];
            $textecorrect.=' ';
            $i++;
        }
        $textecorrect.=$longphrase[$i];
    }
    return $textecorrect;
}

