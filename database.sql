
CREATE DATABASE php_mvc;
USE php_mvc;

CREATE TABLE users (
    id       INT AUTO_INCREMENT PRIMARY KEY,
    name     VARCHAR(80) NOT NULL,
    username VARCHAR(80) NOT NULL,
    email    VARCHAR(80) NOT NULL,
    password VARCHAR(255) NOT NULL
);
