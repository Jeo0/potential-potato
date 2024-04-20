-- lawrence, costa
-- employee 

CREATE TABLE department_table (
    department_id INT PRIMARY KEY,
    department_name VARCHAR(255) NOT NULL,
    building_id INT,
    constraint 	fk_buildingname	foreign key	(buildingid)	references	building_table(buildingid)
);


CREATE TABLE employee_position_table (
    position_id INT PRIMARY KEY,
    position VARCHAR(255) NOT NULL
);


-- each employee are related to 
CREATE TABLE employee_info (
    employee_id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255),
	first_name VARCHAR(255),
    middle_initial VARCHAR(255),
    last_name VARCHAR(255),
    sex ENUM('Male', 'Female'),
    password VARCHAR(255),
    position_id INT,
    department_id INT,
    salary DECIMAL(10, 2),
    FOREIGN KEY (position_id) REFERENCES `employee_position_table`(position_id),
    FOREIGN KEY (department_id) REFERENCES `department`(department_id)
); 