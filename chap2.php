<?php
    $articles = array(
        'BMW' => array(
            'carburant' => 'Essence',
            'boite' => 'Automatique',
            'classe' => 'A'
        ),
        'Mercedes'  => array(
            'carburant' => 'Gasoil',
            'boite' => 'Manuel',
            'classe' => 'C'
        )


        );
    echo "<table border='1' >";
    echo "<tr>";
    echo "<td> Carburant </td>";
    echo "<td> boite </td>";
    echo "<td> classe </td>";
    echo "</tr>";
    foreach($articles as $type => $article)
    {
        echo "<tr>";
        echo "<td colspan ='3' align ='center'>$type </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> {$article['carburant']} </td>";
        echo "<td> {$article['boite']} </td>";
        echo "<td> {$article['classe']} </td>";
        echo "</tr>";
    }
    echo "</table>";










?>