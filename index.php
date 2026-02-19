<?php

// Selfwork 4


$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
    ['name' => 'Mario', 'surname' => 'Rossi', 'gender' => 'M'],
    ['name' => 'Laura', 'surname' => 'Bianchi', 'gender' => 'F'],
    ['name' => 'Giulia', 'surname' => 'Verdi', 'gender' => 'F']
];

foreach ($users as $user) {
    if ($user['gender'] == 'M') {
        echo "Buongiorno Sig. " . $user['name'] . " " . $user['surname'] . "\n";
    } elseif ($user['gender'] == 'F') {
        echo "Buongiorno Sig.ra " . $user['name'] . " " . $user['surname'] . "\n";
    } else {
        echo "Buongiorno " . $user['name'] . " " . $user['surname'] . "\n";
    }
}

