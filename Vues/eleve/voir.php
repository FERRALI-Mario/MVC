<?php

$list = $A_vue['eleve'];

echo "<section class='d-flex flex-wrap justify-content-center'>";
for ($i = 0; $i < count($list); ++$i) {
    $group = $i + 1;
    echo "<section class='p-4 text-center list-group'>";
    echo "<h2>Groupe " . $group . "</h2>";
    for ($j = 0; $j < count($list[$i]); ++$j) {
        if ($j % 2 == 0) {
            echo "<p class='bg-secondary p-2 text-dark bg-opacity-25 rounded-3'>" . $list[$i][$j][0] . "</p>";
        } else {
            echo "<p class='bg-secondary p-2 text-dark bg-opacity-10 rounded-3'>" . $list[$i][$j][0] . "</p>";
        }
    }
    echo "</section>";

}
echo "</section>";

