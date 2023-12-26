CREATE TABLE contact (
    contact_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(255),
    message TEXT,
    contact_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
