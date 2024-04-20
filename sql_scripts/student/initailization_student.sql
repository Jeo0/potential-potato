create table student_table (
	id_student	int primary key auto_increment,
	password	varchar(50),
	email		varchar(20)	unique not null,
	sex			enum('M', 'F'),
	phone		int	not null,

	id_section	int,
	id_birthday	int,
	foreign key	(id_section)	references	section_table(id_section),
	foreign key (id_birthday)	references	student_birthday_table(id_birthday)
);

create table student_name_table(
	id_student	int	primary key	auto_increment,
	firstname	varchar(20)	not null,
	middlename	varchar(20)	not null,
	lastname	varchar(20)	not null,

	foreign key (id_student) 	references student_table(id_student)
);

create table student_birthday_table(
	id_birthday	int	primary key auto_increment,
	birthday	date	not null,
	age			int		not null,

	id_student	int,
	foreign key (id_birthday) 	references student_table(id_birthday)
);


create table section_table (
	id_section 	int	primary key	auto_increment,
	sectionname	char(5),

	id_employee	int,
	constraint fk_section	foreign key (id_employee)	references	employee_info_table(id_employee)

);
