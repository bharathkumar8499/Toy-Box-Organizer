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

?>
