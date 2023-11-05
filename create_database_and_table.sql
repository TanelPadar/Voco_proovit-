CREATE DATABASE IF NOT EXISTS database_voco;

USE database_voco;

CREATE TABLE IF NOT EXISTS users (
     id INT AUTO_INCREMENT PRIMARY KEY,
     username VARCHAR(50) NOT NULL
);

-- Optional: You can set a unique constraint on the username column to ensure uniqueness
ALTER TABLE users ADD CONSTRAINT unique_username UNIQUE (username);
