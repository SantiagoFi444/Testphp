# Testphp
Database
CREATE DATABASE CampusLands

SHOW DATABASE

USE CampusLands

CREATE TABLE departamento(
	idDep INT(11) NOT NULL,
	nombreDep  VARCHAR(50),
	idPais INT(11)
	);
CREATE TABLE campers(
	idCamper VARCHAR(20),
	nombreCamper VARCHAR (50),
	apellidoCamper VARCHAR (50),
	fechaNac DATE,
	idRegion INT(11)
	);
CREATE TABLE region(
	idRegion INT(11) NOT NULL,
	nombreReg VARCHAR (60),
	idDep INT(11)
	);
CREATE TABLE pais(
	idPais INT(11),
	nombrePais VARCHAR (20)	
	);
DESCRIBE departamento;
DESCRIBE campers;
DESCRIBE region;
DESCRIBE pais;