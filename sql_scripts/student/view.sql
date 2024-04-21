
select 	stu.id_student as `student id`,
		name.firstname, name.middlename, name.lastname,
		stu.password, stu.email, stu.sex, stu.phone, 
		bday.birthday, bday.age,
		c.coursename, sec.sectionname
from student_table stu
join student_name_table 		name 	on stu.id_student 	= name.id_student
join student_birthday_table 	bday 	on stu.id_birthday	= bday.id_birthday
join courses_table 				c 		on stu.id_course 	= c.id_course
join section_table				sec		on stu.id_section	= sec.id_section;
