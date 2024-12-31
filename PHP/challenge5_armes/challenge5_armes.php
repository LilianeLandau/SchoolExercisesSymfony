<?php
$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0, 2)];

echo "The opponent weapon is : " . $opponentWeapon . "\n";

if ($opponentWeapon == "fists") {
    $stevensonWeapon = "gun";
    echo "<p>Mr Stevenson's weapon is " . $stevensonWeapon . "</p>";
} elseif ($opponentWeapon == "whip") {
    $stevensonWeapon = "fists";
    echo "<p>Mr Stevenson's weapon is " . $stevensonWeapon . "</p>";
} else {
    $stevensonWeapon = "whip";
    echo "<p>Mr Stevenson's weapon is " . $stevensonWeapon . "</p>";
}
