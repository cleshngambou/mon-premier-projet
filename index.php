<?php 
$_clesh ="je suis clesh j'apprends le php";

echo($_clesh);

$max = 20;
$min =20;

if ($max == $min){
    echo("mean est egale a maix");
}
$users = ["nom" => "clesh","prenom" => "matondo"];
echo($users["prenom"]);
 
$paye = ["RDC","RC","GABON"];
echo($paye[2]);

echo($max-$min);

$nom ="clesh";
$prenom ="matondo";
echo( "<br>");
echo($nom.$prenom );
echo( "<br>");
echo($nom . " ". $prenom );
echo( "<br>");
foreach ($users as $key => $value) {
    echo($key. ":" . $value );
    echo( "<br>");
}

foreach ($paye as $key => $value) {
    echo($key. ":" . $value );
    echo( "<br>");
}
foreach ($paye as $value) {
    echo($value );
    echo( "<br>");
}
  echo( "<br>");  

    echo( "<br>");
for ($i=0; $i <3 ; $i++) { 
    echo($paye[$i]);
    echo( "<br>");
}

function affichage($text,$nbr){
    echo("$text");
    for ($i=0; $i < $nbr; $i++) { 
          echo("<br>");
    }
   
}
affichage("je suis clesh",4);

affichage("hello word",2);
affichage("richard",3);

function concact($nom,$prenom){
    return($nom . " " . $prenom);
}
$fullname = concact("clesh","ngambou");
affichage($fullname,4);
?>

