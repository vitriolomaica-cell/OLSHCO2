CREATE TABLE role (
    role_id INT AUTO_INCREMENT PRIMARY KEY,
    role_prefix VARCHAR(150)
)

CREATE TABLE department (
    department_id INT AUTO_INCREMENT PRIMARY KEY,
    department_name VARCHAR(100)
)

CREATE TABLE user (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    middle_name VARCHAR(50),
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    created_at DATETIME,
    password VARCHAR(255) NOT NULL,
    gender VARCHAR(255) NOT NULL,

    role_id INT,
    department_id INT,

    FOREIGN KEY (role_id) REFERENCES role(role_id),
    FOREIGN KEY (department_id) REFERENCES department(department_id)
)

CREATE TABLE announcements (
    announcement_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    content TEXT NOT NULL,
    type VARCHAR(50) NOT NULL,
    created_at DATETIME,
    status VARCHAR(50),

    user_id INT,

    FOREIGN KEY (user_id) REFERENCES user(user_id)
)

CREATE TABLE events (
    event_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    event_date DATETIME,
    created_at DATETIME,
    status VARCHAR(50),

    user_id INT,

    FOREIGN KEY (user_id) REFERENCES user(user_id)
)

CREATE TABLE actions (
    action_type_id INT AUTO_INCREMENT PRIMARY KEY,
    action_name VARCHAR(100) NOT NULL
)

CREATE TABLE log (
    log_id INT AUTO_INCREMENT PRIMARY KEY,
    description VARCHAR(100) NOT NULL,
    timestamp DATETIME,

    action_type_id INT,
    user_id INT,

    FOREIGN KEY (action_type_id) REFERENCES actions(action_type_id),
    FOREIGN KEY (user_id) REFERENCES user(user_id)
) 