-- database creation
create database qualitycaters;

--create table
create table login (id int AUTO_INCREMENT PRIMARY KEY, username varchar(25) not null, PASSWORD varchar(15) not null, createdat datetime default CURRENT_TIMESTAMP, createdby varchar(15) default 'admin')

--alter password column
ALTER TABLE `login` CHANGE `PASSWORD` `PASSWORD` VARCHAR(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

--insert default value
insert into login(username, password) values('thendralcaters', 'catering@123')

--event table
create table events(event_id int AUTO_INCREMENT primary KEY, event_name varchar(25) not null, created_at datetime default CURRENT_TIMESTAMP, created_by varchar(15) default 'admin')

--insert events
insert into events(event_name) values('Marriage');
insert into events(event_name) values('Reception');
insert into events(event_name) values('Special Buffet');
insert into events(event_name) values('Corporate event');
insert into events(event_name) values('Theme events');
insert into events(event_name) values('Birthday parties');

--order table
create table orders(order_id int AUTO_INCREMENT PRIMARY key, booking_date datetime DEFAULT CURRENT_TIMESTAMP, name varchar(25) not null, email varchar(25) not null, event_date date not null, no_of_persons varchar(4) not null, event_id int, referred_by varchar(25) not null, referer_ph_no double not null, address varchar(250) not null, created_by varchar(15) default 'admin', created_at datetime default CURRENT_TIMESTAMP, FOREIGN KEY (event_id) REFERENCES events(event_id))

--insert orderErrorMessagee
insert into orders(address, email, event_date, event_id, name, no_of_persons, referer_ph_no, referred_by) values('test', 'test@test.com', CURRENT_TIMESTAMP, 1, 'test', 100, 1234533, 'gopi')

--contact TABLE
create table contact(id int AUTO_INCREMENT PRIMARY key, name varchar(25) not null, email varchar(25) not null, message varchar(250), createdat datetime DEFAULT CURRENT_TIMESTAMP)
