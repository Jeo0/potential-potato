create table subject_table(
	id_subject 	int 	primary key	auto_increment,
 	subject_name	varchar(15) 
);

create table subjectinfo_table(
 	id_subjectinfo	int	primary key	auto_increment,
	id_subject		int,
 	id_employee		int,
	id_timeandwhere	int,
	id_student		int,
	foreign key	(id_subject)	references	subject_table(id_subject),
	foreign key	(id_employee)	references employee_info_table(id_employee), 
 	foreign key (id_timeandwhere) 	references timeandwhere_table(id_timeandwhere),
 	foreign key (id_student) 	references student_table(id_student)

);
 
 
create table timeandwhere_table(
	id_timeandwhere	int	primary key	auto_increment,
	time	time,
	id_establishment	int,
	id_section			int,
	foreign key	(id_establishment)	references	establishment_table(id_establishment),
	foreign key	(id_section)		references	section_table(id_section)
);


create table courses_table(
	id_course	int primary key	auto_increment,
	coursename	varchar(30),
	id_student	int,
	foreign key	(id_student)	references	student_table(id_student)

);
