<?php

$toys = [
    ["name" => "Speedy", "type" => "car", "color" => "red"],
    ["name" => "Cuddles", "type" => "doll", "color" => "pink"],
    ["name" => "Bouncer", "type" => "ball", "color" => "blue"],
    ["name" => "Zoom", "type" => "car", "color" => "blue"],
    ["name" => "Snuggles", "type" => "doll", "color" => "red"],
    ["name" => "Jumpy", "type" => "ball", "color" => "green"],
];

// foreach ($toys as $toy) {
//     echo $toy["name"] . " is a " . $toy["type"] . " and is " . $toy["color"] . ".\n";
// }

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
    // and then get toys color and find the matching color toys and push it to the matchedToys array
    foreach ($toys as $toy) {
        if (strtolower($toy['color']) === strtolower($color)) {
            $matchedToys[] = $toy;
        }
    }

    return $matchedToys;
}



// grouped toys
$groupedToys = groupToysByType($toys);
//print_r($groupedToys);

// here echo proper sentence like Speedy is a car and is red.
// foreach ($groupedToys as $type => $group) {
//     foreach ($group as $toy) {
//         echo "{$toy['name']} is a {$toy['type']} and is {$toy['color']}.\n";
//         echo "<br>";
//     }
// }


// find toys by color
$findToysByColor = findToysByColor($toys, "red");
// print_r($findToysByColor);

// here echo proper sentence like Speedy is a car and is red.   
// foreach ($findToysByColor as $toy) {
//     echo "{$toy['name']} is a {$toy['type']} and is {$toy['color']}.\n";
// }

?>


<!-- show above result in html page  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Toy Box Organizer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">
    <div class="container">
        <h1 class="mb-4 text-center">Toy Box Organizer</h1>
        <h2>Toys Grouped by Type</h2>
        <?php
        $grouped = groupToysByType($toys);
        foreach ($grouped as $type => $group) {
            echo "<h4 class='mt-3'>" . $type. "s</h4><ul class='list-group'>";
            foreach ($group as $toy) {
                echo "<li class='list-group-item'>{$toy['name']} is a {$toy['type']} and is {$toy['color']}.</li>";
            }
            echo "</ul>";
        }
        ?>
    </div>
</body>
</html>