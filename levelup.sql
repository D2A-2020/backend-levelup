--drop schema levelup;
--create schema levelup; 
USE levelup;

create table user(
    id int auto_increment PRIMARY KEY not null,
    name varchar(20)
);

create table phone(
    id int auto_increment primary key not null,
    id_user int not null,
    `number` varchar(12) not null,
    constraint foreign key(id_user) references `user`(id)
);

insert into user(name) values ("david");
insert into phone(id_user,`number`) values (1, "092981793");
insert into phone(id_user,`number`) values (1, "24025910");

insert into user(name) values ("maria");
insert into phone(id_user,`number`) values (2, "092237567");
