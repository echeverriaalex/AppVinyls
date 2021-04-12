<?php
    namespace Controllers;
    use Models\Vinyl;
    use PDO\VinylPDO;

    class VinylsController{

        private $vinylsPDO;

        public function __construct(){$this->vinylsPDO = new VinylPDO;}

        public function ShowAddView(){require_once(VIEWS_PATH."add-vinyl.php");}

        public function ShowEditView($vinyl){require_once(VIEWS_PATH."edit-vinyl.php");}

        public function ShowListView(){
        
            $vinylsList = array();
            require_once(VIEWS_PATH."list-vinyl.php");
        }

        public function ShowArticlesView(){

            $vinylsList = array();
            require_once(VIEWS_PATH."list-vinyl-articule.php");
        }


        public function Add($artist, $diskName, $yearEdition, $countryEdition, $statusBox, $statusDisk, $diskFormat, $gender, $velocity, $observations){
            
            $exists = false; // $this->vinylsPDO->SearchVinylByName($diskName);

            if(!$exists){

                $vinyl = new Vinyl($artist, $diskName, $yearEdition, $countryEdition, $statusBox, $statusDisk, $diskFormat, $gender, $velocity, $observations);
                $this->vinylsPDO->Add($vinyl);
                //$this->ShowListView();
            }
            else{

                echo"<script> alert('Error: Cannot add vinyl')</script>";
                $this->ShowAddView();
            }
        }

        public function list(){

        }

        public function delete(){

        }

        public function edit(){

        }
    }
?>