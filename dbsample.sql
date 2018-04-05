CREATE DATABASE mydba;
CREATE TABLE form_element(
student_id int(10) NOT NULL AUTO_INCREMENT,
student_name varchar(255) NOT NULL,
student_email varchar(255) NOT NULL,
student_contact varchar(255) NOT NULL,
student_address varchar(255) NOT NULL,
PRIMARY KEY (student_id)
);