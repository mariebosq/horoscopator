<?php 

//modifier la liste des prédictions


 $rel = PHP_EOL.$_POST['rel'];
    $travail = PHP_EOL.$_POST['job'];
    $fichierRelationnal = fopen('../relationnal.txt', 'a+');

    fwrite($fichierRelationnal, $rel);
       
    fclose($fichierRelationnal);

    $fichierJob = fopen('../job.txt', 'a+');

    fwrite($fichierJob, $travail);

    fclose($fichierJob);

    header('Location: ajouterdespredictions.php');


?>