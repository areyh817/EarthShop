mysql> create table user(
    -> id int(100) auto_increment primary key,
    -> name varchar(100),
    -> email varchar(100),
    -> pw varchar(100),
    -> gender varchar(100)
    -> );

mysql> desc user;
+--------+--------------+------+-----+---------+----------------+
| Field  | Type         | Null | Key | Default | Extra          |
+--------+--------------+------+-----+---------+----------------+
| id     | int          | NO   | PRI | NULL    | auto_increment |
| name   | varchar(100) | YES  |     | NULL    |                |
| email  | varchar(100) | YES  |     | NULL    |                |
| pw     | varchar(100) | YES  |     | NULL    |                |
| gender | varchar(100) | YES  |     | NULL    |                |
+--------+--------------+------+-----+---------+----------------+
5 rows in set (0.03 sec)