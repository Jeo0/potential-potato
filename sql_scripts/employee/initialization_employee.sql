-- lawrence, costa
-- employee 

CREATE TABLE department_table (
    id_department INT PRIMARY KEY,
    departmentname VARCHAR(255) NOT NULL,
    id_building INT,
    constraint 	fk_buildingname	foreign key	(id_building)	references	building_table(id_building)
);


CREATE TABLE employee_position_table (
    id_position 	INT PRIMARY KEY,
    positionname	VARCHAR(30) NOT NULL,
	id_employee		int,
	constraint fk_employee	foreign key (id_employee)	references employee_info_table(id_employee)
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
