<?php
    namespace PDO;

    use \PDOException as Exception;
    use PDO\Connection;
    use Models\Vinyl;

    class VinylPDO{

        private $connection;
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

            try{
                $vinylsList = array();
                $query = "SELECT * FROM ". $this->tableName;
                $this->connection = Connection::getInstance();
                $vinylsResults = $this->connection->Execute($query);

                foreach($vinylsResults as $row){

                    $vinyl = new Vinyl();
                    $vinyl->setArtist($row['artist']);
                    $vinyl->setDiskName($row['diskName']);
                    $vinyl->setYearEdition($row['yearEdition']);
                    $vinyl->setCountryEdition($row['countryEdition']);
                    $vinyl->setStatusBox($row['statusBox']);
                    $vinyl->setStatusDisk($row['statusDisk']);
                    $vinyl->setDiskFormat($row['diskFormat']);
                    $vinyl->setGender($row['gender']);
                    $vinyl->setVelocity($row['velocity']);
                    $vinyl->setObservation($row['observations']);

                    var_dump($vinyl);

                    array_push($vinylsList, $vinyl);
                }
                return $vinylsList;
            }
            catch(Exception $ex){
                throw $ex;
            }
        }


        public function SearchVinylByName($diskName){


        }

        public function Delete($vinylDiskName){

            try{
                $query = "DELETE FROM ".$this->tableName." WHERE (diskName = :vinylDiskName);";
                $parameters['diskName'] = $vinylDiskName;
                $this->connection = Connection::getInstance();
                $deletedCount = $this->connection->ExecuteNonQuery($query, $parameters);
                return $deletedCount;
            }
            catch(Exception $ex){
                throw $ex;
            }
        }
    }

?>