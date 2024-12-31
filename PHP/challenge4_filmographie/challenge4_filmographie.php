<?php

echo "<h1>Challenge 4 - Filmographie</h1>";

$movies = [
["L'Île au trésor","Bobby Driscoll", "Robert Newton", "Basil Sydney"],
["Dr Jekyll and Mr Hyde","John Hannah", "David Warner", "Gerard Horan"],
["Le Pirate des mers du sud","Robert Newton", "Connie Gilchrist", "Rod Taylor"]
];

foreach($movies as $movie){
    echo "<p>Dans le film ". $movie[0]. ", les principaux acteurs sont : ";
    for($i = 1; $i < count($movie); $i++){
        echo $movie[$i]. ", ";
    }
    
   echo "</p>";
}

?>