-- mysql5.7命令
-- 创建管理员用户
grant all on * to 'admin'@'%' identified by '123456';
-- 为books数据库创建一个用户
grant select,insert ,delete ,update on books.* to 'book'@'%' identified by '123456';
-- 为book增加一些权限
grant select,insert ,delete ,update,alter,create ,drop on books.* to book;
