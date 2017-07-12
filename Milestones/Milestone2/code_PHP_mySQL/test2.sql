use student_jyang15;

create table students
(
	id int(10),
    names char(20),
    grade float,
    primary key(id)
);
# drop table students;
insert into students (id,names,grade) values (100, 'aaa', 3.1);
insert into students (id,names,grade) values (101, 'bbb', 3.2);
insert into students (id,names,grade) values (102, 'ccc', 3.3);
insert into students (id,names,grade) values (103, 'ddd', 3.4);

select * from students;


create table image
(
	id int(10),
    title char(20),
    author char(20),
    price float,
    primary key(id)
);

insert into image (id,title,author,price) values (001, 'city', 'John', 10.0);
insert into image (id,title,author,price) values (002, 'view', 'John', 20.0);
insert into image (id,title,author,price) values (003, 'car', 'Fiona', 30.0);
insert into image (id,title,author,price) values (004, 'animal', 'Fiona', 40.0);
insert into image (id,title,author,price) values (005, 'flower', 'Alice', 50.0);

select * from image;




