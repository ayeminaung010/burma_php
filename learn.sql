CREATE TABLE `students` (
    `id` INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(200) NOT NULL,
    `gender` VARCHAR(6) NOT NULL,
    `dob` DATE NOT NULL,
    `age` TINYINT UNSIGNED NOT NULL
);

INSERT INTO `students` (`name`,`email`,`gender`,`dob`,`age`)
VALUES 
('ayeminaung','ayeminaung@gmail.com','male','16-06-2002',21),
('kgmalay','kgmalay@gmail.com','female','16-09-2002',20);


SELECT * from `students`;

UPDATE `students` SET `gender` = 'female', `age` = 25 WHERE `id` = 1;

DELETE FROM `students` WHERE `id` = 1;


create user `ayeminaung`@`%` IDENTIFIED by 'kali';
set password for 'ayeminaung'@'%'  = PASSWORD('ayeminaung');
drop user 'ayeminaung'@'%';

grant all privileges on school.* to 'ayeminaung'@'%';
grant all privileges on *.* to 'ayeminaung'@'%' with GRANT OPTION;

revoke all privileges on *.* to 'ayeminaung'@'%';
REVOKE ALL PRIVILEGES, GRANT OPTION FROM 'ayeminaung'@'%';
flush PRIVILEGES;
show grants;
show grants for 'ayeminaung'@'%';
