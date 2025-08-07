CREATE DATABASE db;
USE db;

CREATE TABLE reg (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  age INT,
  department VARCHAR(100),
  phone VARCHAR(20)
);
