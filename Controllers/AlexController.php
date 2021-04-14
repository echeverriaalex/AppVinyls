<?php
    namespace Controllers;

    class AlexController{

        public function ShowAddView(){require_once(VIEWS_PATH."alex-add.php");}

        public function Add($nombre, $apellido){

            echo "$nombre $apellido";
        }


    }


?>