//数据库完整实例
CREATE TABLE IF NOT EXISTS `daidai` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号',
  `username` varchar(30) NOT NULL COMMENT '用户名',
  PRIMARY KEY (`id`)
)


INSERT INTO `daidai` (`id`, `username`) VALUES
(1, 'sb'),
(2, 'absa');