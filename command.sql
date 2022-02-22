create database supermarket;
use `supermarket`;

create table products(
                         id int primary key auto_increment,
                         productName varchar(50) not null,
                         type varchar(50),
                         price float,
                         quantity int,
                         date datetime,
                         description varchar(500)
);