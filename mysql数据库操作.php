1、查看数据库
show databases;
2、选择查看到的数据库
use tese；
3、查看所有表
show tables；
4、查看表中字段
desc user；
5、查看表中数据
select *from user；
select  id from user；


创建数据库
create databases jiuxian;
删除数据库
drop databases jiuxian;


表操作
删除表  ddrop table user；
创建表  create table user(
			id int unsigned not null auto_increment，
			username varchar（50）not null，
			age int not null,
			primary key(id)
		);
插入数据 insert into user(id,username,age) values (1,'user1',20);
		 insert into user(id) values (1);
		 
删除数据 delete from user where id=1；
		 delete from user;删除数据不会改变自增顺序
修改数据 update user set age=30 where id=2；
		 update user set age=30；直接修改整个表
查看数据 select * from user；
		 select * from user where id in(1,2,3); 查询user表中id等于1，2，3的
		 select username from user；查看表中所有用户名

清空表数据 truncate user