CREATE DATABASE IF NOT EXISTS student_management_system;
USE student_management_system;

CREATE TABLE IF NOT EXISTS tbl_student (
  student_id VARCHAR(20) NOT NULL,
  name VARCHAR(100) NOT NULL,
  gender VARCHAR(10) NOT NULL,
  program VARCHAR(50) NOT NULL,
  level VARCHAR(10) NOT NULL,
  semester VARCHAR(5) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  PRIMARY KEY (student_id)
);
