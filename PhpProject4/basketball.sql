CREATE DATABASE una_bball;

USE una_bball;
CREATE TABLE opponent
(
  id int auto_increment PRIMARY KEY,
  school varchar(50),
  city varchar(50),
  state varchar(2)
);

CREATE TABLE users 
(
    id int primary key auto_increment, 
    username varchar(255), 
    password varchar(255) 
);

-- insert a row into the users table for the administrator:
-- username = admin
-- password = pwd
INSERT INTO users (username, password) VALUES ('admin', '$2y$10$6EagpQz90eekX4cIlXjWdu/iCCo3jmSPrLmm9kJ/OVzbmwHaJZGzG');

INSERT into opponent (school, city, state) VALUES('SOUTH CAROLINA','COLUMBIA','S.C.');
INSERT into opponent (school, city, state) VALUES('CARVER','FLORENCE','ALA.');
INSERT into opponent (school, city, state) VALUES('INDIANA','BLOOMINGTON','IND.');
INSERT into opponent (school, city, state) VALUES('SAMFORD','FLORENCE','ALA.');
INSERT into opponent (school, city, state) VALUES('SOUTH DAKOTA STATE','BROOKINGS','S.D.');
INSERT into opponent (school, city, state) VALUES('LOUISIANA TECH','RUSTON','LA.');
INSERT into opponent (school, city, state) VALUES('MISSISSIPPI VALLEY STATE','FLORENCE','ALA.');
INSERT into opponent (school, city, state) VALUES('MOREHEAD STATE','FLORENCE','ALA.');
INSERT into opponent (school, city, state) VALUES('TROY','TROY','ALA.');
INSERT into opponent (school, city, state) VALUES('BIRMINGHAM-SOUTHERN','FLORENCE','ALA.');
INSERT into opponent (school, city, state) VALUES('UAB','BIRMINGHAM','ALA.');
INSERT into opponent (school, city, state) VALUES('ALABAMA A&M','HUNTSVILLE','ALA.');
INSERT into opponent (school, city, state) VALUES('FLORIDA STATE','TALLAHASSEE','FLA.');
INSERT into opponent (school, city, state) VALUES('JACKSONVILLE','FLORENCE','ALA.');
INSERT into opponent (school, city, state) VALUES('NORTH FLORIDA','FLORENCE','ALA.');
INSERT into opponent (school, city, state) VALUES('LIBERTY','LYNCHBURG','VA.');
INSERT into opponent (school, city, state) VALUES('LIPSCOMB','NASHVILLE','TENN.');
INSERT into opponent (school, city, state) VALUES('STETSON','FLORENCE','ALA.');
INSERT into opponent (school, city, state) VALUES('FLORIDA GULF COAST','FLORENCE','ALA.');
INSERT into opponent (school, city, state) VALUES('KENNESAW STATE','KENNESAW','GA.');
INSERT into opponent (school, city, state) VALUES('NJIT','NEWARK','N.J.');
INSERT into opponent (school, city, state) VALUES('JACKSONVILLE','JACKSONVILLE','FLA.');
INSERT into opponent (school, city, state) VALUES('LIPSCOMB','FLORENCE','ALA.');
INSERT into opponent (school, city, state) VALUES('LIBERTY','FLORENCE','ALA.');
INSERT into opponent (school, city, state) VALUES('STETSON','DELAND','FLA.');
INSERT into opponent (school, city, state) VALUES('NORTH FLORIDA','JACKSONVILLE','FLA.');
INSERT into opponent (school, city, state) VALUES('KENNESAW STATE','FLORENCE','ALA.');
INSERT into opponent (school, city, state) VALUES('NJIT','FLORENCE','ALA.');
INSERT into opponent (school, city, state) VALUES('FLORIDA GULF COAST','FORT MYERS','FLA.');
