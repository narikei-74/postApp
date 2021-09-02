create table member (
  userName varchar(1000) not null primary key,
  password varchar(1000) not null,
  profileText varchar(1000),
  follower int
);

create table post (
  id int not null primary key AUTO_INCREMENT,
  userName varchar(1000) not null,
  time varchar(100) not null,
  text varchar(1000) not null,
  likes int
);