<?php

$toys = [
    ["name" => "Speedy", "type" => "car", "color" => "red"],
    ["name" => "Cuddles", "type" => "doll", "color" => "pink"],
    ["name" => "Bouncer", "type" => "ball", "color" => "blue"],
    ["name" => "Zoom", "type" => "car", "color" => "blue"],
    ["name" => "Snuggles", "type" => "doll", "color" => "red"],
    ["name" => "Jumpy", "type" => "ball", "color" => "green"],
];

foreach ($toys as $toy) {
    echo $toy["name"] . " is a " . $toy["type"] . " and is " . $toy["color"] . ".\n";
}

// More messy stuff goes here

// Step-1:Create functions like `groupToysByType($toys)`

function groupToysByType($toys) {

    // Define the grouptoys variable which is array to store the grouped records
    // loop the toys array  
    // and then get toys type as key and store the value for that

    $groupToys = [];
    foreach ($toys as $toy) {
        $groupToys[$toy['type']][] = $toy;
    }
    return $groupToys;
}


// Step-2:Create a function like `findToysByColor($toys, $color)` where it used to find the Toys by color

function findToysByColor($toys, $color){

    // Define the matchedToys variable which is array to store the matched records
    $matchedToys = [];
    // loop the toys array
    // and then get toys color as key and store it.
    foreach ($toys as $toy) {
        if ($toy['color'] === $color) {
            $matchedToys[] = $toy;
        }
    }

    return $matchedToys;
}



// grouped toys
$groupedToys = groupToysByType($toys);
//print_r($groupedToys);

// here echo proper sentence like Speedy is a car and is red.
foreach ($groupedToys as $type => $group) {
    foreach ($group as $toy) {
        echo "{$toy['name']} is a {$toy['type']} and is {$toy['color']}.\n";
        echo "<br>";
    }
}


// find toys by color
$findToysByColor = findToysByColor($toys, "red");
// print_r($findToysByColor);

// here echo proper sentence like Speedy is a car and is red.
foreach ($findToysByColor as $toy) {
    echo "{$toy['name']} is a {$toy['type']} and is {$toy['color']}.\n";
}

?>
