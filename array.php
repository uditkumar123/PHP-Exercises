<?php

/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

/*
Print every array element in a new line.
*/


$food = [
    "Pizza",
    "Lasgna",
    "Burrito",
    "Dosa"
];
  
echo "$food[0]<br>";

echo "$food[1]<br>";

echo "$food[2]<br>";

echo "$food[3]<br>";



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


$list = "<ul>
    <li>{$food[0]}</li>
    
    <li>{$food[1]}</li>
    
    <li>{$food[2]}</li>
    
    <li>{$food[3]}</li>
    </ul>";

echo $list;



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


$food_assoc = [
    "pizza" => "Main Course, Italian",
    "lasgna" => "Main Course, Italian",
    "burrito" => "Main course, Mexican",
    "dosa"   => "Indian Snack"
];


/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

echo "Pizza | {$food_assoc ['pizza']}<br>";
echo "Lasgna | {$food_assoc ['lasgna']}<br>";
echo "Burrito | {$food_assoc ['burrito']}<br>";
echo "Dosa | {$food_assoc ['dosa']}<br>";





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


$food_assoc = [
    "pizza" => ["type" =>"Main Course"],
    "lasgna" => "Main Course",
    "burrito" => "Main course",
    "dosa"   => "Snack"
];

$pizza = [
    "type" => "Main Course",
    "country" => "Italy"
];

$lasgna = [
    "type" => "Main Course",
    "country" => "Italy"
];

$burrito = [
    "type" => "Main Course",
    "country" => "Mexico"
];

$dosa = [
    "type" => "Snack",
    "country" => "India"
];

$food_assoc = [
    "pizza" => $pizza,
    "lasgna" => $lasgna,
    "burrito" => $burrito,
    "dosa" => $dosa
    
];
/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

echo "Pizza | {$food_assoc["pizza"]["type"]} | {$food_assoc["pizza"]["country"]} <br>";
echo "Lasgna | {$food_assoc["lasgna"]["type"]} | {$food_assoc["lasgna"]["country"]} <br>";
echo "Burrito | {$food_assoc["burrito"]["type"]} | {$food_assoc["burrito"]["country"]} <br>";
echo "Dosa | {$food_assoc["dosa"]["type"]} | {$food_assoc["dosa"]["country"]} <br>";



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

echo "<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
  
    <td>pizza</td>
    <td>{$food_assoc["pizza"]["type"]}</td>
    <td>{$food_assoc["pizza"]["country"]}</td>
  </tr>
  
  <tr>
    <td>pasta</td>
    <td>{$food_assoc["lasgna"]["type"]}</td>
    <td>{$food_assoc["lasgna"]["country"]}</td>
  </tr>
  
  <tr>
    <td>burger</td>
    <td>{$food_assoc["burrito"]["type"]}</td>
    <td>{$food_assoc["burrito"]["country"]}</td>
  </tr>
  
  <tr>
    <td>coffee</td>
    <td>{$food_assoc["dosa"]["type"]}</td>
    <td>{$food_assoc["dosa"]["country"]}</td>
  </tr>
</table>";
?>