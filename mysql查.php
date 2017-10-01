数据库起别名
select id as maoxian,username as u from user;


查询表里面除掉重复的username，剩余的唯一的username
select distinct username from user;


查询空值 null
select * from user where age is null；
select * from user where age is not null；


查询表里面 username 中含有linux字符的 字段
select * from user where username like '%linux%'; 百分号代表其他字符
select * from user where username regexp 'linux | php'; 正则表达式检索，


select * from user order by id asc；以id来排序；默认升序
select * from user order by id desc；以id来排序；默认降低

sleect * from user limit 3;限制只输出前三条
sleect * from user limit 3，5;从第三个开始截取5条数据

select contact(id,username) from user; contact是字符串连接符，将id和username的内容链接起来

select * from user order by rand();//随机排序

select * from user order by rand() limit;//随机抽取3位用户


select count(*) from user/select count(id) from user; 查询一共有几行数据

select sum(id) from user;把表里面所有的id求和

select avg(id) from user;把表里面所有的id求平均数

select max(id) from user;求表里最大值
select min(id) from user;求表里最小值

select * from user where id in(select max(id) from user);//获取最大值对应的那条数据（嵌套查询）

select * from user group by class_id;以什么来分组

select class_id,count(*) from user group by class_id;//分组聚合

select * from user,class where user.class_id=class.id//普通表关联查询,查询表里面user表里面clas_id和clas表里面id一样的值
select * from user.name,class.name where user.class_id=class.id//普通表关联查询,


select class.name,if(count(user.id),count(user.id),"暂无数据")from class left join user on class.id=user.class_id group by class.id//把空替换成暂无数据

left join 左连接 把左边的表格数据全部输出
right join 右连接 把右边的表格数据全部输出
inner join 相当于普通的夺表查询

select sum(if(score>=60,1,0)) 及格，sum（if(score< 60,1,0)） 不及格 from user;//统计表里面及格和不及格的人数

select class_id from user group by class_id having class_id<=2//分组聚合后条件查询，where换成having