SET SESSION FOREIGN_KEY_CHECKS=0;

/* Drop Tables */

DROP TABLE IF EXISTS a_simu;
DROP TABLE IF EXISTS deal;
DROP TABLE IF EXISTS bought;
DROP TABLE IF EXISTS item_category;
DROP TABLE IF EXISTS category_info;
DROP TABLE IF EXISTS contact;
DROP TABLE IF EXISTS simulation;
DROP TABLE IF EXISTS House;
DROP TABLE IF EXISTS item_img;
DROP TABLE IF EXISTS item_re;
DROP TABLE IF EXISTS okiniiri;
DROP TABLE IF EXISTS stock_item;
DROP TABLE IF EXISTS Itmes;
DROP TABLE IF EXISTS Users;

Create DATABASE hew2020_91149;

use hew2020_91149;
/* Create Tables */

CREATE TABLE a_simu
(
	simulationid int(11) NOT NULL,
	haiti int(11) NOT NULL,
	product_id int(11) NOT NULL,
	x int(11),
	y int(11),
	PRIMARY KEY (simulationid, haiti)
);


CREATE TABLE bought
(
	id int(11) NOT NULL AUTO_INCREMENT,
	User_id int NOT NULL,
	created_ad datetime NOT NULL,
	total_pr int(11) NOT NULL,
	avilable_point int(11),
	deal_buy enum('クレジット利用','電子決済','コンビニ決済','代引き決済') NOT NULL,
	PRIMARY KEY (id)
);


CREATE TABLE category_info
(
	info_id int(11) NOT NULL,
	categoryname varchar(255),
	PRIMARY KEY (info_id)
);


CREATE TABLE contact
(
	contact_id int(11) NOT NULL,
	User_id int NOT NULL,
	contact_detail enum('製品','購入手続き','配送','シミュレート','その他') NOT NULL,
	contact_sen varchar(255) NOT NULL,
	contact_date datetime NOT NULL,
	update_date datetime,
	status enum('満足','妥協','まだ','不満') NOT NULL,
	PRIMARY KEY (contact_id)
);


CREATE TABLE deal
(
	id int(11) NOT NULL AUTO_INCREMENT,
	product_id int(11) NOT NULL,
	bought_count int(11) NOT NULL,
	by_price int(11) NOT NULL,
	PRIMARY KEY (id, product_id)
);


CREATE TABLE House
(
	property int(255) NOT NULL,
	property_name varchar(255),
	madori_cat enum('1種類目','2種類目''3種類目','4種類目'),
	PRIMARY KEY (property)
);


CREATE TABLE item_category
(
	product_id int(11) NOT NULL,
	info_id int(11) NOT NULL,
	PRIMARY KEY (product_id, info_id)
);


CREATE TABLE item_img
(
	item_img_id int(11) NOT NULL,
	product_id int(11) NOT NULL,
	product_img varchar(255),
	PRIMARY KEY (item_img_id)
);


CREATE TABLE item_re
(
	Reviewnum int(11) NOT NULL,
	product_id int(11) NOT NULL,
	User_id int NOT NULL,
	sentence varchar(255),
	delete_at datetime,
	star int(1),
	toukou_at datetime,
	PRIMARY KEY (Reviewnum, product_id)
);


CREATE TABLE items
(
	product_id int(11) NOT NULL AUTO_INCREMENT,
	product_name varchar(255) NOT NULL,
	Price int(11),
	count int(11) NOT NULL,
	search_name varchar(255) NOT NULL,
	sy_height int(11),
	sy_width int(11),
	sy_images varchar(255),
	PRIMARY KEY (product_id)
);


CREATE TABLE okiniiri
(
	product_id int(11) NOT NULL,
	User_id int NOT NULL,
	admin_at datetime,
	address varchar(255),
	PRIMARY KEY (product_id, User_id)
);


CREATE TABLE simulation
(
	simulationid int(11) NOT NULL,
	User_id int NOT NULL,
	property int(255) NOT NULL,
	registerd_name varchar(255),
	edit_time datetime,
	delete_time datetime,
	create_at datetime,
	PRIMARY KEY (simulationid)
);


CREATE TABLE stock_item
(
	product_id int(11) NOT NULL,
	item_storage int(11),
	PRIMARY KEY (product_id)
);


CREATE TABLE Users
(
	User_id int NOT NULL AUTO_INCREMENT,
	password char(255) NOT NULL,
	mail_address varchar(255) NOT NULL,
	name varchar(255) NOT NULL,
	tel varchar(15),
	address_num varchar(7),
	address varchar(255),
	Born date,
	point int(11),
	created_at datetime NOT NULL,
	delete_time datetime,
	unique(mail_address),
	PRIMARY KEY (User_id)
);



/* Create Foreign Keys */

ALTER TABLE deal
	ADD FOREIGN KEY (id)
	REFERENCES bought (id)
	ON UPDATE CASCADE
	ON DELETE CASCADE
;


ALTER TABLE item_category
	ADD FOREIGN KEY (info_id)
	REFERENCES category_info (info_id)
	ON UPDATE CASCADE
	ON DELETE CASCADE
;


ALTER TABLE simulation
	ADD FOREIGN KEY (property)
	REFERENCES House (property)
	ON UPDATE CASCADE
	ON DELETE CASCADE
;


ALTER TABLE a_simu
	ADD FOREIGN KEY (product_id)
	REFERENCES Items (product_id)
	ON UPDATE CASCADE
	ON DELETE CASCADE
;


ALTER TABLE deal
	ADD FOREIGN KEY (product_id)
	REFERENCES Items (product_id)
	ON UPDATE CASCADE
	ON DELETE CASCADE
;


ALTER TABLE item_category
	ADD FOREIGN KEY (product_id)
	REFERENCES Items (product_id)
	ON UPDATE CASCADE
	ON DELETE CASCADE
;


ALTER TABLE item_img
	ADD FOREIGN KEY (product_id)
	REFERENCES Items (product_id)
	ON UPDATE CASCADE
	ON DELETE CASCADE
;


ALTER TABLE item_re
	ADD FOREIGN KEY (product_id)
	REFERENCES Items (product_id)
	ON UPDATE CASCADE
	ON DELETE CASCADE
;


ALTER TABLE okiniiri
	ADD FOREIGN KEY (product_id)
	REFERENCES Items (product_id)
	ON UPDATE CASCADE
	ON DELETE CASCADE
;


ALTER TABLE stock_item
	ADD FOREIGN KEY (product_id)
	REFERENCES Items (product_id)
	ON UPDATE CASCADE
	ON DELETE CASCADE
;


ALTER TABLE a_simu
	ADD FOREIGN KEY (simulationid)
	REFERENCES simulation (simulationid)
	ON UPDATE CASCADE
	ON DELETE CASCADE
;


ALTER TABLE bought
	ADD FOREIGN KEY (User_id)
	REFERENCES Users (User_id)
	ON UPDATE CASCADE
	ON DELETE CASCADE
;


ALTER TABLE contact
	ADD FOREIGN KEY (User_id)
	REFERENCES Users (User_id)
	ON UPDATE CASCADE
	ON DELETE CASCADE
;


ALTER TABLE item_re
	ADD FOREIGN KEY (User_id)
	REFERENCES Users (User_id)
	ON UPDATE CASCADE
	ON DELETE CASCADE
;


ALTER TABLE okiniiri
	ADD FOREIGN KEY (User_id)
	REFERENCES Users (User_id)
	ON UPDATE CASCADE
	ON DELETE CASCADE
;


ALTER TABLE simulation
	ADD FOREIGN KEY (User_id)
	REFERENCES Users (User_id)
	ON UPDATE CASCADE
	ON DELETE CASCADE
;