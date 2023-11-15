<?php
function calculerConges($dateDebut, $dateFin, $soldeConges) {

    $joursFeries = [
        '2023-01-01', '2023-04-17', '2023-05-01', '2023-05-08', '2023-05-25', '2023-07-14', '2023-08-15', '2023-11-01', '2023-11-11', '2023-12-25'
    ];

    $joursOuvres = 0;
    $dateCourante = new DateTime($dateDebut);

    while ($dateCourante <= new DateTime($dateFin)) {
        $jourSemaine $dateCourante->format('N');
        $dateStr = $dateCourante->format('Y-m-d');

        if ($jourSemaine >= 1 && $jourSemaine <= 5 && !in_array($dateStr, $joursFeries)) {
            $joursOuvres++;
        }

        $dateCourante->modify('+1 day');
    }

    $joursRestants = $soldeConges - $joursOuvres;

    if ($joursRestants >= 0) {
        return $joursOuvres;
    } else {
        return "Pas assez de congés. Il manque " . abs($joursRestants) . " jours.";
    }
}

$soldeConges = 5;
$dateDebut1 = '2023-03-20';
$dateFin1 = '2023-03-24';
$resultat1 = calculerConges($dateDebut1, $dateFin1, $soldeConges);
echo "Date n°1 : $resultat1\n";

$dateDebut2 = '2023-04-01';
$dateFin2 = '2023-04-11';
$resultat2 = calculerConges($dateDebut2, $dateFin2, $soldeConges);
echo "Date n°2 : $resultat2\n";

$dateDebut3 = '2023-07-12';
$dateFin3 = '2023-07-19';
$resultat3 = calculerConges($dateDebut3, $dateFin3, $soldeConges);
echo "Date n°3 : $resultat3\n";