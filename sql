-- Users table
CREATE TABLE Users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    password VARCHAR(255)
);

-- Incomes table
CREATE TABLE Incomes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES Users(id),
    date DATE,
    amount DECIMAL(10, 2),
    source VARCHAR(255)
);

-- Expenses table
CREATE TABLE Expenses (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES Users(id),
    date DATE,
    amount DECIMAL(10, 2),
    category_id INT,
    description TEXT,
    FOREIGN KEY (category_id) REFERENCES Categories(id)
);

-- Categories table
CREATE TABLE Categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES Users(id),
    name VARCHAR(255)
);

-- Reports table
CREATE TABLE Reports (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES Users(id),
    name VARCHAR(255),
    date_from DATE,
    date_to DATE,
    filters TEXT,
    data TEXT
);

