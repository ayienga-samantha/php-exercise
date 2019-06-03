<?php

/*
+---+
| 1 |
+---+
Use while-loop to print the numbers 1 to 10.
*/

$number = 1;

while ($number <= 10) {
    echo $number, "<br>";
    $number ++;
}


//task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Use the PHP function range(start, end, step) 
to create array of numbers 5 to 100 with the step 5 
(example: 5, 10, 15, ...)
*/

$numbers = range (5, 100, 5);
print_r ($numbers);

echo "<br>";

/*
Use for-loop and if-statement to print all odd numbers.

How to check if a number is odd or even? 
Divide it by 2, and if there is a remainder, the number is odd. 
Use modulus operator (outputs the remainder after division), 
for example: 
1 % 2 = 1 -> odd number
2 % 2 = 0 -> even number
3 % 2 = 1 -> odd number
4 % 2 = 0 -> even number
*/
for ($i=0; $i<10; $i +=1) {
    $remainder = $i % 2;
    
    if ($remainder != 0) {
        echo "{$i}<br>";
    }
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = [
        "Cake",
        "Ice cream",
        "Yoghurt",
        "Cereals"
    ];

/*
Use while-loop to print array elements (every food in a new row).
*/
$foodLength = sizeof($food);

$indexPointer = 0; 

while ($indexPointer < $foodLength){
    echo $food[$indexPointer]. "<br>";
    $indexPointer ++;
}

echo "<br>";

/*
Use for-loop to print array elements (every food in a new row).
*/

for ($i = 0; $i < sizeof($food); $i += 1){
    echo $food[$i]. "<br>";
}

echo "<br>";

/*
Use foreach-loop to print array elements (every food in a new row).
*/

foreach ($food as $val) {
    echo $val. "<br>";
}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Print the array from task 3 as unordered list. Printing has to be done inside the for-loop.

Before looping, you need to print the opening list-tag <ul>
After looping, you need to print the closing list-tag </ul>
*/

echo "<ul>";
        for ($i = 0; $i < sizeof($food); $i += 1){
           echo "<li> $food[$i] </li>";
        }
echo "</ul>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
The array from task 3 is turned into associative array. 
The meal courses are broken down based on the type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)

$food_assoc = [
  "pizza" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
  "cheesesake" => [
    "type" => "desert",
    "origin" => "Greece"
  ]
]

So, food_assoc is an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin.
*/

$food_assoc = [
    "Cake" => [
        "type" => "sweet treat",
        "origin" => "Europe"
    ],
    "Ice cream" => [
        "type" => "cold treat",
        "origin" => "China"
    ],
    "Yoghurt" => [
        "type" => "filling treat",
        "origin" => "Mesopotamia"
    ],
    "Cereals" => [
        "type" => "breakfast",
        "origin" => "America"
    ],
];

/*
Loop through $food_assoc and use print_r() to print the entire meal course 
(entire array that includes type and origin).
*/


foreach ($food_assoc as $k => $v){
        echo "<pre>";
        print_r($k);
        print_r($v);
        echo "</pre>";
}

/*
Loop through $food_assoc and print the meal names (keys of $food_assoc)
as unordered list-items. Loop through the current meal (inner loop through sub-array) 
and print the type and origin as nested list items (see the example below).
*/


echo "<ul>";
        foreach ($food_assoc as $k => $v){
            echo "<pre>";
                print_r("<li> ${k} </li>");
                    echo "<ul>";
                        foreach ($food_assoc[$k] as $k => $v){
                             echo "<pre>";
                                print_r("<li> ${k} : ${v} </li>");
                            echo "</pre>";
                        }
                    echo "</ul>";
            echo "</pre>";
        }
echo "</ul>";

?>
