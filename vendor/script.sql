-- @todo Уникальное мыло, сохраниние паролей Sha1

DROP TABLE zend_user;
DROP TABLE zend_user_role;

CREATE TABLE zend_user_role
(
    user_role_id INT NOT NULL AUTO_INCREMENT,
    user_role_name VARCHAR(30) NOT NULL,
    PRIMARY KEY (user_role_id)
);

CREATE TABLE zend_user
(
    user_id INT NOT NULL AUTO_INCREMENT,
    user_email VARCHAR(30) NOT NULL,
    user_password VARCHAR(100) NOT NULL,
    user_role_id INT NOT NULL DEFAULT '1',
    PRIMARY KEY (user_id),
    FOREIGN KEY (user_role_id) REFERENCES user_role(user_role_id)
);

INSERT INTO zend_user_role (user_role_name) VALUES ('user');
INSERT INTO zend_user_role (user_role_name) VALUES ('admin');

-- password 12345
INSERT INTO zend_user (user_email, user_password, user_role_id) VALUES ('vragovR@yandex.ru', '827ccb0eea8a706c4c34a16891f84e7b', '2');
INSERT INTO zend_user (user_email, user_password) VALUES ('vragovR@live.ru', '827ccb0eea8a706c4c34a16891f84e7b');