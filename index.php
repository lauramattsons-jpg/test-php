<?php

$firstname = 'Laura';
$lastname = 'Mattson';
$age = 25;

echo '<h1>' . $firstname . ' ' . $lastname . '</h1>';
echo '<p>' . $age . '</p>';

echo $firstname;
echo $age;

// Vector for fruit

$fruits = ['apple', 'banana', 'orange', 'kiwi'];

echo $fruits[0]; // apple 
echo $fruits[1]; // banana
echo $fruits[2]; // orange
echo $fruits[3]; // kiwi

// Foreach loop (tar varje värde i vektorn och skriver ut det)
foreach ($fruits as $fruit) {
    echo '<p>' . $fruit . '</p>'; // Skriver ut varje värde skillt som en <p>
}
