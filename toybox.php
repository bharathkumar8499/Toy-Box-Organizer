<?php

$toys = [
    ["name" => "Speedy", "type" => "car", "color" => "red"],
    ["name" => "Cuddles", "type" => "doll", "color" => "pink"],
    ["name" => "Bouncer", "type" => "ball", "color" => "blue"],
    ["name" => "Zoom", "type" => "car", "color" => "blue"],
    ["name" => "Snuggles", "type" => "doll", "color" => "red"],
    ["name" => "Jumpy", "type" => "ball", "color" => "green"],
];

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


// ==== clean code for showing logic alone ===

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


<!-- === same in html output along with bonus task ===  -->

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

        <!-- To find toys by color -->
        <!--  Create a form to get the color from the user as input.-->
        <!--  and then we need to submit the form inorder to get the result-->
        <!--  when form is submitted, it call the findToysByColor function where along with color where we need to pass the user input color to it-->
        <!-- here argumnet color will be in get method  -->
        <!-- after that display the result in page -->
        <h2 class="mt-4">Find Toys by Color</h2>
        <form action="toybox.php" class="mt-4" method="get">
            <div class="mb-3">
                <label for="color" class="form-label">Enter Color:</label>
                <input type="text" class="form-control" name="color" required placeholder="Enter Color like red" value="<?php echo isset($_GET['color']) ? $_GET['color'] : ''; ?>">
            </div>  
            <button type="submit" class="btn btn-primary">Find Toys</button>
        </form>
        <?php
        if (isset($_GET['color'])) {
            $color = $_GET['color'];
            $getToys = findToysByColor($toys, $color);
            // here check the count of getToys
            if (count($getToys) > 0) {
                echo "<h2 class='mt-4'>Toys that are {$color}</h2>";
                echo "<ul class='list-group'>";
                foreach ($getToys as $toy) {
                    echo "<li class='list-group-item'>{$toy['name']} is a {$toy['type']} and is {$toy['color']}.</li>";
                }
                echo "</ul>";
            } else {
                echo "<h2 class='mt-4'>No toys found for color {$color}</h2>";
            }
        }
        ?>
    </div>
</body>
</html>