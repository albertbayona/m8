CREATE DATABASE M08_ToDo;
CREATE USER 'ToDoUser'@'localhost' IDENTIFIED BY 'linuxlinux';
USE M08_ToDo;
CREATE TABLE tasks (
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    task varchar(255) NOT NULL,
    date timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
GRANT ALL PRIVILEGES ON M08_ToDo.* TO 'ToDoUser'@'localhost';