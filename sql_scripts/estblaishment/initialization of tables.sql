-- jesie
-- establishment 
create database test1;
use test1;

create table building_table(
	id_building	int primary key auto_increment,
	buildingname varchar(10) unique
);

create table roomtype_table(
	id_roomtype	int primary key auto_increment,
    roomtype	varchar(15) unique
    );
    
create table test1.establishment_table(
	id_establishment int primary key auto_increment,
	floornum 	int,
	roomnum		int,
    id_building	int,
    id_roomtype	int,
    constraint 	fk_buildingname	foreign key	(id_building)	references	building_table(id_building),
    constraint 	fk_roomtype		foreign key	(id_roomtype)	references	roomtype_table(id_roomtype)
);




-- drop database test1;
