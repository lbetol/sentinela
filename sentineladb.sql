-- drop database sentineladb;
create database sentineladb;
use sentineladb;

create table if not exists Users(
code	char (6), 
name varchar(32),
mail varchar(32),
pswd varchar(16),
user varchar(12) unique,
tel0 char   (11),
primary key (code)
)engine=innodb;

create table if not exists Requisitions(
code char    (6),
ip00 char    (15),
city varchar (32),
regi varchar (32),
loca char    (28),
orgn varchar (32),
primary key (code)
)engine=innodb;

create table if not exists Hashtags(
code char (6) ,
hash char (16),
rqst char (6) ,
primary key (code),
foreign key (rqst) references Requisitions (code)
)engine=innodb;

