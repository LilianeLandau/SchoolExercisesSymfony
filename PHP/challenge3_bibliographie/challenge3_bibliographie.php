
<?php

$books = [
    "Dr. Jekyll et M. Hyde" => 1886,
    "L'Île au trésor" => 1883,
    "Voyage avec un âne dans les Cévennes" => 1879,    
];


asort($books);

//clé =title
//valeur=year
foreach ($books as $title => $year) {
    echo "<p> $year - $title</p>";
}










?>