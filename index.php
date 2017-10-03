<?php
/*Ceci est mon ancien code

$langages = array("HTML","CSS","Javascript","PHP");
sort($langages);
foreach ($langages as $key => $val) {
    echo $val.'<br />';
}

function fusion($langages)
{
  foreach ($langages as $key => $val) {
      echo $val;
      }
}
echo fusion($langages);*/

//Déclaration du tableau $language
$language = array("HTML","CSS","Javascript","PHP");
//Déclaration de la fonction alphabetic() qui permet de trier $language par ordre alphabétique
function alphabetic($code){
  //vérification que le paramètre est un tableau
  if(is_array($code)==true){
    //tri du tableau
    sort($code);
  }
  return $code;
}
echo 'Le tableau langage trié :<br />';
//on appelle la fonction alphabetic() et on stocke le résultat dans le tableau $sortedArray
$sortedArray = alphabetic($language);
//On parcours le tableau avec la boucle foreach pour afficher son contenu
foreach($sortedArray as $value){
  echo $value . '<br />';
}

//Déclaration de la fonction concat() qui permet de renvoyer le contenu d'un tableau concaténé
function concat($code){
  //vérification que le paramètre est bien un tableau
  if(is_array($code)==true){
    //Rassemble les éléments du tableau dns la chaîne $string
    $string = implode(' ',$code);
  }
  return $string;
}
echo '<br />Le tableau langage concaténé :<br />';
echo concat($language);
?>
