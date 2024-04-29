CREATE TABLE survey_responses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    email VARCHAR(100) NOT NULL,
    dob DATE NOT NULL,
    contact_number VARCHAR(20) NOT NULL,
    favorite_food VARCHAR(100),
    q1 VARCHAR(20),
    q2 VARCHAR(20),
    q3 VARCHAR(20),
    q4 VARCHAR(20),
    q5 VARCHAR(20),
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
