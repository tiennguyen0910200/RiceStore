drop database if exists riceStore;
create database riceStore;
use  riceStore;

create table rice(
id int primary key auto_increment,
name varchar(255),
image varchar(255),
price varchar(255)
);

insert into rice values (1,"Cơm gà","../Img/1.jpg","20.000"),
                        (2,"Cơm heo","../Img/2.jpg","20.000"),
						(3,"Cơm chó","../Img/3.jpg","20.000"),
                        (4,"Cơm bò","../Img/4.jpg","20.000");
                        


