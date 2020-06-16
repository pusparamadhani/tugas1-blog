CREATE TABLE category (
	id int(11) NOT NULL AUTO_INCREMENT,
	name varchar(100) NOT NULL,
	text varchar(100) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE post (
	id int(11) NOT NULL AUTO_INCREMENT,
	date date NOT NULL,
	slug varchar(25) NOT NULL,
	title varchar(100) NOT NULL,
	text text NOT NULL,
	cat_id int(11) NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY (cat_id)
		REFERENCES category (id)
);

CREATE TABLE photos (
	id int(11) NOT NULL AUTO_INCREMENT,
	date date NOT NULL,
	title varchar(100) NOT NULL,
	text text NOT NULL,
	post_id int(11) NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (post_id)
		REFERENCES post (id)
);

CREATE TABLE album (
	id int(11) NOT NULL AUTO_INCREMENT,
	name varchar(100) NOT NULL,
	text varchar(100) NOT NULL,
	photo_id int(11) NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (photo_id)
		REFERENCES photos (id)
);

CREATE TABLE tb_user (
	user_id INT(10) NOT NULL AUTO_INCREMENT,
	user_name VARCHAR(50) NOT NULL,
	user_password VARCHAR(256) NOT NULL,
	user_level TINYINT(3) DEFAULT '0',
	PRIMARY KEY(user_id),
	UNIQUE KEY(user_name)
);

INSERT INTO tb_user VALUES ('', 'admin', 'admin', 1);