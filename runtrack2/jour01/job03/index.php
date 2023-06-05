<?php
// Création des variables de types primitifs
$boolVar = true;
$intVar = 42;
$stringVar = "Hello World!";
$floatVar = 3.14;

// Création du tableau HTML
echo '<table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>booléen</td>
                <td>boolVar</td>
                <td>' . $boolVar . '</td>
            </tr>
            <tr>
                <td>entier</td>
                <td>intVar</td>
                <td>' . $intVar . '</td>
            </tr>
            <tr>
                <td>chaîne de caractères</td>
                <td>stringVar</td>
                <td>' . $stringVar . '</td>
            </tr>
            <tr>
                <td>nombre à virgule flottante</td>
                <td>floatVar</td>
                <td>' . $floatVar . '</td>
            </tr>
        </tbody>
    </table>';
?>
