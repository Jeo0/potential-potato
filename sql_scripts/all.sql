/* 
 * (in sequence) Rule in the order of which tables needs to be inserted first 
 * 1. building_table
 * 		- referenced by establishment_table AND department_table
 * 2. roomtype_table
 * 		- referenced by establishment_table
 * 3. subject_table
 * 		- referenced by subjectinfo_table
 * 4. employee_position_table
 * 		- referenced by	employee_info_table
 * 5. section_table
 *		- referenced by timeandwhere_table 	AND student_table
 * 6|7. courses_table AND student_birthday_table
 * 		- referenced by student_table
 *
 * 
 * The remaining tables are subsequently populated after the prime 7. 
 * The remaining tables can be inserted in any order:
 * 	- department_table
 * 	- establishment_table
 * 	- employee_info_table
 * 	- timeandwhere_table
 * 	- subjectinfo_table
 * 	- student_name_table
 * 	- student_table
 */


-- establishment 
create database test1;
use test1;
-- drop database test1;

create table building_table(
	id_building	int primary key auto_increment,
	buildingname varchar(10) unique not null
);

create table roomtype_table(
	id_roomtype	int primary key auto_increment,
    roomtype	varchar(15) unique not null
    );
    
create table establishment_table(
	id_establishment int primary key auto_increment,
	floornum 	int 	null,
	roomnum		int		null,
    id_building	int		not null,
    id_roomtype	int		not null,
    constraint 	fk_buildingname	foreign key	(id_building)	references	building_table(id_building)	,
    constraint 	fk_roomtype		foreign key	(id_roomtype)	references	roomtype_table(id_roomtype) 
);




-- drop database test1;

create table subject_table(
	id_subject 	int 	primary key	auto_increment,
 	subject_name	varchar(15) unique
);


-- lawrence, costa
-- employee 

CREATE TABLE department_table (
    id_department INT PRIMARY KEY,
    departmentname VARCHAR(255) NOT NULL,		-- this cannot be unique as many department may stem from 
    id_building INT,
    foreign key	(id_building)	references	building_table(id_building) 
);



CREATE TABLE employee_position_table (
    id_position 	INT PRIMARY KEY,
    positionname	VARCHAR(30) NOT NULL unique
);



-- each employee are related to 
CREATE TABLE employee_info_table (
    id_employee INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(30)	unique ,
	first_name VARCHAR(20),
    middle_initial VARCHAR(20),
    last_name VARCHAR(20),
    sex ENUM('M', 'F'),
    password VARCHAR(35),
    salary DECIMAL(10, 2),

    id_position INT,
    id_department INT,
	FOREIGN KEY (id_position) REFERENCES `employee_position_table`(id_position),
    FOREIGN KEY (id_department) REFERENCES `department_table`(id_department) 
); 


create table section_table (
	id_section 	int	primary key	auto_increment,
	sectionname	char(5)	unique


);


create table timeandwhere_table(
	id_timeandwhere	int	primary key	auto_increment,
	time	time,
	id_establishment	int,
	id_section			int,
	foreign key	(id_establishment)	references	establishment_table(id_establishment) ,
	foreign key	(id_section)		references	section_table(id_section) 
);

create table courses_table(
	id_course	int primary key	auto_increment,
	coursename	varchar(30) unique

);


create table student_birthday_table(
	id_birthday	int	primary key	auto_increment,
	birthday	date	not null	unique,
	age			int		not null	unique

);
create table student_table (
	id_student	int primary key auto_increment,
	password	varchar(50),
	email		varchar(20)	unique not null,
	sex			enum('M', 'F'),
	phone		int	not null,

	id_course	int,
	id_section	int,
	id_birthday	int,
	foreign key	(id_section)	references	section_table(id_section) ,
	foreign key (id_birthday)	references	student_birthday_table(id_birthday) ,
	foreign key (id_course)		references 	courses_table(id_course) 
);



create table subjectinfo_table(
 	id_subjectinfo	int	primary key	auto_increment,
	id_subject		int,
 	id_employee		int,
	id_timeandwhere	int,
	foreign key	(id_subject)	references	subject_table(id_subject) ,
	foreign key	(id_employee)	references employee_info_table(id_employee) ,
 	foreign key (id_timeandwhere) 	references timeandwhere_table(id_timeandwhere) 
);
 
create table student_name_table(
	id_student	int	primary key	auto_increment,
	firstname	varchar(20)	not null,
	middlename	varchar(20)	not null,
	lastname	varchar(20)	not null,

	foreign key (id_student) 	references student_table(id_student) 
);



-- drop database test1;
