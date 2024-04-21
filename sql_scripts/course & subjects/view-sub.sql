

/*
select 	subject_table		.subject_name 	as `subject`,
		section_table		.sectionname	as `section`,
		concat( employee_info_table	.last_name, ' ',
			employee_info_table	.first_name)as `instructor name`,
		timeandwhere_table	.time,
		establishment_table	.floornum		as `floor`,
		building_table		.buildingname	as `bldg`,
		establishment_table	.roomnum		as `room #`
	
from subjectinfo_table	
join subject_table			st	on subjectinfo_table	.id_subject = st.id_subject
join employee_info_table	ei	on subjectinfo_table	.
*/



SELECT 
    s.subject_name AS subjectname,
    CONCAT(e.first_name, ' ', e.last_name) AS employeename,
    sec.sectionname AS sectionname,
    tw.time AS time,
    est.floornum AS floornum,
    est.roomnum AS roomnum,
    b.buildingname AS buildingname
FROM 
    subjectinfo_table si
    JOIN subject_table s ON si.id_subject = s.id_subject
    JOIN employee_info_table e ON si.id_employee = e.id_employee
    JOIN timeandwhere_table tw ON si.id_timeandwhere = tw.id_timeandwhere
    JOIN section_table sec ON tw.id_section = sec.id_section
    JOIN establishment_table est ON tw.id_establishment = est.id_establishment
    JOIN building_table b ON est.id_building = b.id_building;

