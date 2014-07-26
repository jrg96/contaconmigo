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

INSERT INTO user_info(iduser, latitude, longitude, area, cel, city, estate) VALUES(1, 13.507937, -88.869846, 5, 63057971, 114, 6);
INSERT INTO user_info(iduser, latitude, longitude, area, cel, city, estate) VALUES(2, 13.708906, -89.208857, 12, 63057971, 193, 10);
INSERT INTO user_info(iduser, latitude, longitude, area, cel, city, estate) VALUES(3, 13.712575, -89.161822, 53, 74226531, 193, 10);
INSERT INTO user_info(iduser, latitude, longitude, area, cel, city, estate) VALUES(4, 13.690227, -89.265849, 48, 63057971, 193, 10);
INSERT INTO user_info(iduser, latitude, longitude, area, cel, city, estate) VALUES(5, 13.668044, -89.236667, 4, 74226531, 193, 10);
INSERT INTO user_info(iduser, latitude, longitude, area, cel, city, estate) VALUES(6, 13.719246, -89.190318, 134, 63057971, 193, 10);
INSERT INTO user_info(iduser, latitude, longitude, area, cel, city, estate) VALUES(7, 13.830480, -89.372830, 99, 74226531, 65, 4);
INSERT INTO user_info(iduser, latitude, longitude, area, cel, city, estate) VALUES(8, 13.708906, -89.208857, 85, 63057971, 193, 10);
INSERT INTO user_info(iduser, latitude, longitude, area, cel, city, estate) VALUES(9, 13.690227, -89.265849, 65, 74226531, 193, 10);
INSERT INTO user_info(iduser, latitude, longitude, area, cel, city, estate) VALUES(10, 13.719246, -89.190318, 22, 63057971, 193, 10);
