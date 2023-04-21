<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<?php

spl_autoload_register(function ($class_name) 
{
    include "Class/".$class_name . '.php';
});
?>
<h1> Exercices POO </h1>

<h2> III. Cinéma </h2>
    <p>
            Vous avez en charge de gérer différentes entités autour de la thématique du cinéma. <br>
    Les films seront caractérisés par leur titre, leur date de sortie en France, leur durée (en minutes) <br>
    ainsi que leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). Un résumé du film <br>
    (synopsis) pourra éventuellement être renseigné. Chaque film est caractérisé par un seul genre <br>
    cinématographique (science-fiction, aventure, action, ...). <br>
    Votre application devra recenser également les acteurs de chacun des films. On désire connaître le <br>
    nom, le prénom, le sexe et la date de naissance de l’acteur ainsi que le rôle (nom du personnage) <br>
    joué par l’acteur dans le(s) film(s) concerné(s). <br>
    Il serait intéressant d'utiliser la notion d'héritage entre classes dans cet exercice. A vous de le mettre <br>
    en place correctement ! <br>
    Attention, le rôle (par exemple James Bond) ne doit être instancié qu'une seule fois (dans la mesure <br>
    où ce rôle a été incarné par plusieurs acteurs.) <br>
    On doit pouvoir : <br>
    Lister la liste des acteurs ayant incarné un rôle précis (ex: les acteurs ayant joué le rôle de <br>
    Batman : Michael Keaton, Val Kilmer, George Clooney, ...) <br>
    Lister le casting d'un film (dans le film Star Wars Episode IV, Han Solo a été incarné par <br>
    Harrison Ford, Luke Skywalker a été incarné par Mark Hamill, ...) <br>
    Lister les films par genre (exemple : le genre SF est associé à X films : Star Wars, Blade <br>
    Runner, ...) <br>
    Lister la filmographie d'un acteur (dans quels films a-t-il joué ?) <br>
    Lister la filmographie d'un réalisateur (quels sont les films qu'a réalisé ce réalisateur ?
    </p>
<?php

$comedie = new Genre ("Comedie");
$action = new Genre ( "Action");


$JeanGirault= new Realisateur( "Jean", "Girault", "Monsieur" );
$andreHunebelle = new Realisateur ("Hunebelle","André","Monsieur");

$jeanMarais= new Acteur ("Jean  ","Marais","Monsieur");
$louisDeFunes =new Acteur("louis","de Funès", "Monsieur");


$paulJuve = new Role("Paul Juve");
$LudovicCruchot = new Role ("Ludovic Cruchot");
$fantomas = new Film("fantomas","1964-01-12",104,$comedie ,$andreHunebelle); 
$gendarme = new Film ("Le Gendarme de Saint-Tropez", "1964-02-28",90, $comedie,$JeanGirault);
$batman = new Role ("Batman");
$Batman1928 = new Film ("Batman 1928", 1928, 90,$comedie,$andreHunebelle);
$batman2008 =new Film ( "dark night", "2008", 120, $action,$andreHunebelle );
$AdamWest= new Acteur ("Adam","West","Monsieur");

$persoFantomas = new Role("Fantomas");
$auditionBatman1 = new Audition ($AdamWest ,$batman,$Batman1928);
$auditionBatman2 = new Audition ($louisDeFunes,$batman,$batman2008);
$audition = new Audition($louisDeFunes,$paulJuve,$fantomas);
$audition2 = new Audition ($louisDeFunes,$LudovicCruchot,$gendarme);
$audition3 = new Audition ($jeanMarais,$persoFantomas, $fantomas);



echo $jeanMarais->filmographie();
echo $batman->getActeur();
echo $andreHunebelle->filmographie();
echo $action->filmographie(); 
echo $gendarme->distributionDufilm();
echo $fantomas->dureeHeure();
echo $fantomas->dateDesortieFR();
echo $gendarme->dureeHeure();
echo $gendarme->dateDesortieFR();
 ?>    
</body>
</html>
