CREATE DATABASE cuenta_conmigo;
USE cuenta_conmigo;

CREATE TABLE users(
	id INT PRIMARY KEY NOT NULL,
	username VARCHAR(255) NOT NULL,
	password varchar(64) NOT NULL
);

CREATE TABLE user_info(
	id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
	iduser int NOT NULL,
	latitude double  NOT NULL,
	longitude double NOT NULL,
	area double NOT NULL,
	cel varchar(10) not null,
	city varchar(3) not null,
	estate varchar(2) not null,  
	FOREIGN KEY(iduser) REFERENCES users(id)
);

CREATE TABLE org_request (	
	id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
	iduser int NOT NULL,
	title varchar(100) NOT NULL,
	description varchar(1000) NOT NULL,
	quantity int,
	visible VARCHAR(1) not null,
	FOREIGN KEY(iduser) REFERENCES users(id)	
);

CREATE TABLE user_response(
	id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
	idrequest int NOT NULL,
	description varchar(140) not null,
	email varchar(255),
	cel varchar(10) not null,
	FOREIGN KEY(idrequest) REFERENCES org_request(id)	
);