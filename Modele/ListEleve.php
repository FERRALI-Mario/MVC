<?php

final class ListEleve {

    public function triEleve($nbr) {
        $file = fopen("ListeEtudiants.csv", "r");
        $listEleve = [];
        while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
            $listEleve[] = $data;
        }
        shuffle($listEleve);
        return $group = array_chunk($listEleve, $nbr);
    }
}