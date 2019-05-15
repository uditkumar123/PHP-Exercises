<?php

/*
+---+
| 1 | 
+---+
Print the sentence: Welcome to PHP!
*/
$welcome = "Welcome to PHP!";
echo $welcome;

// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 2 | 
+---+
Print the sentence: PHP stands for "Hypertext Preprocessor"!
*/

$fullform = "PHP stands for \"Hypertext Preprocessor\"";
echo $fullform;

// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 3 | 
+---+
Print the following sentence as a paragraph: PHP stands for "Hypertext Preprocessor"!
*/

$paragraph = "<p>PHP stands for \"Hypertext Preprocessor\"!</p>";
    echo $paragraph;


// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 4 | 
+---+
Print the following acronyms - every acronym in a new line:

HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language
*/

$html = "HTML - Stands for Hypertext Markup Language";

$css = "CSS - Stands for Cascading Stylesheet";

$js = "JS - Stands for JavaScript";

$php = "PHP - Stands for Hypertext Preprocessor";

$sql = "SQL - Stands for Structural Query Language";


echo $html ."<br>" . $css . "<br>" . $js . "<br>" . $php . "<br>". $sql;

   
// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 5 | 
+---+
Print the following acronyms in unordered list - <ul> ... </ul>:

HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language
*/

$ulist = "<ul>
    <li>HTML - Stands for Hypertext Markup Language</li>
    
    <li>CSS - Stands for Cascading Stylesheet</li>
    
    <li>JS - Stands for JavaScript</li>
    
    <li>PHP - Stands for Hypertext Preprocessor</li>
    
    <li>SQL - Stands for Structural Query Language</li>
     
        </ul>";

echo $ulist;

?>
