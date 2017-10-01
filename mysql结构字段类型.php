数据库表字段类型
1.数值
int 整数
float 小数


2.字符串
char 短字符串最高255
varchar 长字符串最高2555
text 最少255文章最高65535

char和varchar区别：
1、char最长255，varchat最长65535
2、char固定长度空间，varchar可变长度空间


3、日期和时间
时间戳



数据字段属性
1.unsigned 无符号  例如，INT的类型范围是-2 147 483 648 ～ 2 147 483 647， INT UNSIGNED的范围类型就是0 ～ 4 294 967 295。
2.zerofill zerofill 使用说明，例如 int(5)表示当数值宽度小于 5 位的时候在数字前面加’0’填满宽度,如果不显示指定宽度则默认为 int(11)，zerofill默认为int(10。注:当使用zerofill时，默认会自动加unsigned（无符号）属性，使用unsigned属性后，数值范围是原值的2倍，例如，有符号为-128~+127，无符号为0~256。
3.auto_increment id自增，前提必须是主键
	create table sb(
		id int unsigned auto_increment primary key,
		name varchar(30) not null default 'user'  //name没值的时候显示默认值user
	);


表索引：
1、主键索引 
2、唯一索引 
3、普通索引

主键索引
添加索引 primary key(id)
删除索引 

普通索引
添加索引 alter table user add index idx_name(name);
删除索引 alter table user drop index idx_name;

唯一索引
添加索引 alter table user add unique uni_name(name);
删除索引 alter table user drop index uni_name;


select * from user \G; 行列翻转


修改数据库表字段
增加字段  alter table user add sex tinyint not null;
		  alter table user add sex tinyint not null after name; 在name字段后插入
		  alter table user add sex tinyint not null first;插在第一个前面
删除字段  alter table drop sex;
修改字段  alter 










设置主键方法
primaer key（id）