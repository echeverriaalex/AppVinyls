<?php
    namespace PDO;

    use Exception;
    use Models\Vinyl;

    class VinylPDO{

        private $connection;
        private $vinylsList = array();
        private $tableName = "Vinyl";

        public function Add(Vinyl $vinyl){

            try{
                $query = "INSERT INTO ".$this->tableName." (artist, diskName, yearEdition, countryEdition, statusBox, statusDisk, diskFormat, gender, velocity, observations) 
                VALUES (:artist, :diskName, :yearEdition, :countryEdition, :statusBox, :statusDisk, :diskFormat, :gender, :velocity, :observations);";

                $parameters["artist"] = $vinyl->getArtist();
                $parameters["diskName"] = $vinyl->getDiskName();
                $parameters["yearEdition"] = $vinyl->getYearEdition();
                $parameters["countryEdition"] = $vinyl->getCountryEdition();
                $parameters["statusBox"] = $vinyl->getStatusBox();
                $parameters["statusDisk"] = $vinyl->getStatusDisk();
                $parameters["diskFormat"] = $vinyl->getDiskFormat();
                $parameters["gender"] = $vinyl->getGender();
                $parameters["velocity"] = $vinyl->getVelocity();
                $parameters["observations"] = $vinyl->getObservation();

                $this->connection = Connection::getInstance();
                $this->connection->ExecuteNonQuery($query, $parameters);
            }
            catch(Exception $ex){
                throw $ex;
            }            
        }

        public function GetAll(){

        }


        public function SearchVinylByName($diskName){


        }
    }

?>