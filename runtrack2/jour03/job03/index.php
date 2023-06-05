<?php
$str = "I'm sorry Dave I'm afraid I can't do that.";

$lowercaseStr = strtolower($str); // Convertit la chaîne en minuscules pour simplifier la vérification des voyelles

$vowels = ['a', 'e', 'i', 'o', 'u']; // Tableau contenant les voyelles

for ($i = 0; $i < strlen($lowercaseStr); $i++) {
    if (in_array($lowercaseStr[$i], $vowels)) {
        echo $str[$i];
    }
}
?>
