-- Create the database
CREATE DATABASE blood_request;

-- Use the database
USE blood_request;

-- Create the requests table
CREATE TABLE requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    birthdate DATE NOT NULL,
    gender VARCHAR(50) NOT NULL,
    contact VARCHAR(255) NOT NULL,
    blood_type VARCHAR(10) NOT NULL,
    location VARCHAR(255) NOT NULL,
    id_front LONGBLOB NOT NULL,
    id_back LONGBLOB NOT NULL,
    checked BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create the donors table
CREATE TABLE donors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    birthdate DATE NOT NULL,
    gender VARCHAR(50) NOT NULL,
    contact VARCHAR(255) NOT NULL,
    blood_type VARCHAR(10) NOT NULL,
    location VARCHAR(255) NOT NULL,
    id_front LONGBLOB NOT NULL,
    id_back LONGBLOB NOT NULL,
    checked BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);