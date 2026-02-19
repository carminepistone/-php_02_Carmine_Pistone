<?php

// Selfwork 4


// $users = [
//     ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
//     ['name' => 'Mario', 'surname' => 'Rossi', 'gender' => 'M'],
//     ['name' => 'Laura', 'surname' => 'Bianchi', 'gender' => 'F'],
//     ['name' => 'Giulia', 'surname' => 'Verdi', 'gender' => 'F']
// ];

// foreach ($users as $user) {
//     if ($user['gender'] == 'M') {
//         echo "Buongiorno Sig. " . $user['name'] . " " . $user['surname'] . "\n";
//     } elseif ($user['gender'] == 'F') {
//         echo "Buongiorno Sig.ra " . $user['name'] . " " . $user['surname'] . "\n";
//     } else {
//         echo "Buongiorno " . $user['name'] . " " . $user['surname'] . "\n";
//     }
// }

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$counter = 0;
$total = 0;

foreach($numbers as $number){
    if($number %2 == 0){
        $total += $number;
        $counter++; 
    }
}


echo $total/$counter;


