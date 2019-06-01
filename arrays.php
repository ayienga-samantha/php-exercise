<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = ["Pizza",
         "Chapati",
         "Rice",
         "Onion rings"];

/*
Print every array element in a new line.
*/


echo "<pre>";
    print_r($food);
echo "</pre>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/


echo "<ul>
        <li> $food[0] </li>
        <li> $food[1] </li>
        <li> $food[2] </li>
        <li> $food[3] </li>
</ul>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

$food_assoc = [ ];

$food_assoc = [
   "Pizza" => "main course", 
   "Chapati" => "main dish",
   "Rice" => "side dish",
   "Onion rings" => "snack",
];

echo "Pizza | " .$food_assoc ["Pizza"];

echo "<br>";
    
echo "Chapati | " .$food_assoc ["Chapati"];

echo "<br>";
    
echo "Rice | " .$food_assoc ["Rice"];

echo "<br>";
    
echo "Onion rings | " .$food_assoc ["Onion rings"];


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

$origin = [
    "main course" => "Italy",
    "main dish" => "India",
    "side dish" => "Africa",
    "snack" => "America",
];

$food_assoc = [
    "Pizza" => $origin,
    "Chapati" => $origin,
    "Rice" => $origin,
    "Onion rings" => $origin,
];


echo "Pizza | main course". " | " .$food_assoc["Pizza"]["main course"];

echo "<br>";

echo "Chapati | main dish". " | " .$food_assoc["Chapati"]["main dish"];

echo "<br>";

echo "Rice | side dish". " | " .$food_assoc["Rice"]["side dish"];

echo "<br>";

echo "Onion rings | snack". " | " .$food_assoc["Onion rings"]["snack"];



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/

$origin = [
    "main course" => "Italy",
    "main dish" => "India",
    "side dish" => "Africa",
    "snack" => "America",
];

$food_assoc = [
    "Pizza" => $origin,
    "Chapati" => $origin,
    "Rice" => $origin,
    "Onion rings" => $origin,
];

echo "
    <table>
        <tr>
            <th>Food</th>
            <th>Type</th>
            <th>Origin</th>
        </tr>
        <tr>
            <td>$food[0]</td>
            <td>Main course</td>
            <td>{$food_assoc['Pizza']['main course']}</td>
        </tr>
        <tr>
            <td>$food[1]</td>
            <td>Main dish</td>
            <td>{$food_assoc["Chapati"]["main dish"]}</td>
        </tr>
         <tr>
            <td>$food[2]</td>
            <td>Side dish</td>
            <td>{$food_assoc["Rice"]["side dish"]}</td>
        </tr>
         <tr>
            <td>$food[3]</td>
            <td>Snack</td>
            <td>{$food_assoc["Onion rings"]["snack"]}</td>
        </tr>
    </table>"

?>
