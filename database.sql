CREATE DATABASE pharmacy;

USE pharmacy;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255)
);

CREATE TABLE medicines (
    id INT AUTO_INCREMENT PRIMARY KEY,
    medicine_name VARCHAR(100),
    company VARCHAR(100),
    price DECIMAL(10,2),
    quantity INT
);
