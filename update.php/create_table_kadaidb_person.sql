CREATE TABLE kadaidb.person (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name VARCHAR(50),
    age INT(11),
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);
