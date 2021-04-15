<?php 
    namespace Controllers;
    use PDO\VinylPDO;
    use Models\Vinyl;
    
    class VinylsController{

        private $vinylsPDO;

        public function __construct(){$this->vinylsPDO = new VinylPDO();}

        public function ShowAddView($message = ""){require_once(VIEWS_PATH."add-vinyl.php");}

        public function ShowEditView($vinyl){require_once(VIEWS_PATH."edit-vinyl.php");}

        public function ShowListView(){
        
            $vinylsList = $this->vinylsPDO->GetAll();
            require_once(VIEWS_PATH."list-vinyl.php");
        }

        public function ShowArticlesView(){

            $vinylsList = $this->vinylsPDO->GetAll();
            require_once(VIEWS_PATH."list-vinyl-articule.php");
        }

        public function Add($artist, $diskName, $yearEdition, $countryEdition, $statusBox, $statusDisk, $diskFormat, $gender, $velocity, $observations){
            
            //$exists = false;  $this->vinylsPDO->SearchVinylByName($diskName);
            $vinyl = new Vinyl($artist, $diskName, $yearEdition, $countryEdition, $statusBox, $statusDisk, $diskFormat, $gender, $velocity, $observations);
            $this->vinylsPDO->Add($vinyl);
            $message = "Vinyl successfully added";
            $this->ShowAddView($message);
            //$this->ShowArticlesView();

            //if(!$exists){

                /*
                $vinyl = new Vinyl($artist, $diskName, $yearEdition, $countryEdition, $statusBox, $statusDisk, $diskFormat, $gender, $velocity, $observations);
                $this->vinylsPDO->Add($vinyl);
                $message = "Vinyl successfully added";
                //$this->ShowAddView();
                */
            //}

            
           //else{

               // echo"<script> alert('Error: Cannot add vinyl')</script>";
                //$this->ShowAddView();
            //}
        }

        public function Delete(){

        }

        public function Edit(){

        }
    }
?>