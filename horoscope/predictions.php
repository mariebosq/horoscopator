<?php 
$astro = array(
    "Bélier",
    "Taureau",
    "Gémeaux",
    "Cancer",
    "Lion",
    "Vierge",
    "Balance",
    "Scorpion",
    "Sagittaire",
    "Capricorne",
    "Verseau",
    "Poisson"
);

// On initialise le seed de random
$seed = strtotime(date("Y/m/d"));
srand($seed);

//lecture des predictions

$fichierRelationnal = fopen('../relationnal.txt', 'r');
$relationnal = [];


    while (($ligne = fgets($fichierRelationnal)) !== false) {
        array_push($relationnal, $ligne);
    }

fclose($fichierRelationnal);



$fichierJob = fopen('../job.txt', 'r');
$job = [];


    while (($ligne = fgets($fichierJob)) !== false) {
        array_push($job, $ligne);
    }

fclose($fichierJob);

//ne pas répéter les phrases à afficher
// On copie les phrases pour ne pas les réutiliser
$phrasesNonUtilisees = $relationnal;
$phrasesNonUtiliseesJob = $job;

// Nombre de phrases qu'on veut
$nbPhrases = 12;
$signes = array(
    array());
$jobRandom = array(
    array());


for($j = 0; $j < count($signes); $j++) {
    // Résultats
    $phrasesSelectionnees = array();

    for($i = 0; $i < $nbPhrases; $i++) {
        // On choisit la position de la phrase
        $n = rand(0, count($phrasesNonUtilisees) - 1);
        $phraseSelectionnee = $phrasesNonUtilisees[$n];
        
        // On ajoute la phrase dans le tableau de résultats
        array_push($signes[$j], $phraseSelectionnee);
        // // On enlève la phrase que l'on vient de choisir
        array_splice($phrasesNonUtilisees, $n, 1);
    }
}

for($j = 0; $j < count($jobRandom); $j++) {
    // Résultats
    $phrasesSelectionneesJob = array();

    for($i = 0; $i < $nbPhrases; $i++) {
        // On choisit la position de la phrase
        $n = rand(0, count($phrasesNonUtiliseesJob) - 1);
        $phraseSelectionneeJob = $phrasesNonUtiliseesJob[$n];
        
        // On ajoute la phrase dans le tableau de résultats
        array_push($jobRandom[$j], $phraseSelectionneeJob);
        // // On enlève la phrase que l'on vient de choisir
        array_splice($phrasesNonUtiliseesJob, $n, 1);
    }
}


include 'horoscopator.php'; 
 ?>