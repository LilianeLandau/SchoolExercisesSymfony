CREATE TABLE wizard (
    id INT PRIMARY KEY,
    first_name VARCHAR(80),
    last_name VARCHAR(80)
);


CREATE TABLE team (
    id INT PRIMARY KEY,
    name VARCHAR(255)
);

CREATE TABLE player (
    id INT PRIMARY KEY,
    wizard_id INT,
    team_id INT,
    role VARCHAR(50),
    enrollment_date DATE,
    FOREIGN KEY (wizard_id) REFERENCES wizard(id),
    FOREIGN KEY (team_id) REFERENCES team(id)
);
