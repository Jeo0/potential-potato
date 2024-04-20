-- jesie
-- establishment 
create database test1;
use test1;

create table building_table(
	buildingid	int primary key auto_increment,
	buildingname varchar(10) unique
);

create table roomtype_table(
	roomtypeid	int primary key auto_increment,
    roomtype	varchar(15) unique
    );
    
create table test1.establishment_table(
	establishmentid int primary key auto_increment,
	floornum 	int,
	roomnum		int,
    buildingid	int,
    roomtypeid	int,
    constraint 	fk_buildingname	foreign key	(buildingid)	references	building_table(buildingid),
    constraint 	fk_roomtype		foreign key	(roomtypeid)	references	roomtype_table(roomtypeid)
);




-- drop database test1;
