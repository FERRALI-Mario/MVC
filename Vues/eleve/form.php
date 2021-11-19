<?php

echo "<form class='row g-3 w-25 m-auto bg-secondary p-4 text-dark bg-opacity-10 rounded-3' action='tri' method='post' enctype='multipart/form-data'>";
echo "<label class='form-label' for='list'>Choisisez un fichier : </label>";
echo "<input class='form-control' type='file' name='list' id='list' required>";
echo "<label  class='form-label' for='group'>Nombre de personne/groupe : </label>";
echo "<input class='form-control' type='number' name='group' min='2' max='10' required>";
echo "<input class='btn btn-primary' type='submit' value='Envoyer'>";
echo "</form>";
echo "</br>";
