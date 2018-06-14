CREATE TABLE user_review (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
order_id VARCHAR(10) NOT NULL,
product_id VARCHAR(10) NOT NULL,
user_id VARCHAR(10) NOT NULL,
rating FLOAT,
review TEXT,
created_at DATETIME NOT NULL,,
updated_at NOT NULL DEFAULT CURRENT_TIMESTAMP
)
