CREATE DATABASE company;
CREATE TABLE employee(
employee_id int(10) NOT NULL AUTO_INCREMENT,
employee_name varchar(255) NOT NULL,
employee_email varchar(255) NOT NULL,
employee_contact varchar(255) NOT NULL,
employee_address varchar(255) NOT NULL,
PRIMARY KEY (employee_id)
)
