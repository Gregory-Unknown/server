CREATE DATABASE database_esobchak;
CREATE USER 'esobchak'@'localhost' IDENTIFIED BY '21';
GRANT ALL PRIVILEGES ON database_esobchak.* TO 'esobchak'@'localhost';
FLUSH PRIVILEGES;

