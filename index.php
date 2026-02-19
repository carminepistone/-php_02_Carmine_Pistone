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


// Selfwork 5


// $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// $counter = 0;
// $total = 0;

// foreach($numbers as $number){
//     if($number %2 == 0){
//         $total += $number;
//         $counter++; 
//     }
// }


// echo $total/$counter;


for ($i = 1; $i <= 100; $i++) {
    switch($i){
        case $i % 15 == 0:
            echo "HACKADEMY \n";
            break;
        case $i % 3 == 0:
            echo "PHP \n";
            break;
        case $i % 5 == 0:
            echo "JAVASCRIPT \n";
            break;

        default:
            echo "$i \n";
            break;
    }
}


