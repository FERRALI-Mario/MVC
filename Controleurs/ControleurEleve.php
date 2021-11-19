<?php

final class ControleurEleve {

    public function defautAction() {
        Vue::montrer('eleve/default');
    }

    public function triAction() {
        $file = file_get_contents($_FILES['list']['tmp_name']);
        file_put_contents('ListeEtudiants',$file);

        $group = $_POST['group'];

        $O_listEleve =  new ListEleve();
        Vue::montrer('eleve/voir', array('eleve' =>  $O_listEleve->triEleve($group)));
    }

    public function formAction() {
        Vue::montrer('eleve/form');
    }

}