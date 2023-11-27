create table real_one(
    id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(255),
    surname varchar(255)
);
alter table real_one add city varchar(55);
select * from real_one;
delete from real_one where id in (2,3,4,5);
delete from real_one where id BETWEEN 6 and 8;