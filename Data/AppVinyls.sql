create database AppVinyls;
use AppVinyls;

create table if not exists Vinyl( 

    artist varchar(30), 
    diskName varchar(30), 
    yearEdition int , 
    countryEdition varchar(30), 
    statusBox varchar(30), 
    statusDisk varchar(30), 
    diskFormat varchar(20), 
    gender varchar(30), 
    velocity varchar(30), 
    observations varchar(140)
);