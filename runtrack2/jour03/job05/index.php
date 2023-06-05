<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait.";

$dic = array(
    "consonnes" => 0,
    "voyelles" => 0
);

$vowels = array('a', 'e', 'i', 'o', 'u', 'y');

for ($i = 0; $i < strlen($str); $i++) {
    $character = strtolower($str[$i]);
    
    if (ctype_alpha($character)) {
        if (in_array($character, $vowels)) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}

echo "<table>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{$dic['voyelles']}</td>
                <td>{$dic['consonnes']}</td>
            </tr>
        </tbody>
    </table>";
?>
