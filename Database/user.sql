mysql> create table user(
    -> id int(100) auto_increment primary key,
    -> name varchar(100),
    -> uid varchar(100) not null,
    -> pw varchar(100) not null,
    -> gender varchar(100)
    -> );

mysql> desc user;
+--------+--------------+------+-----+---------+----------------+
| Field  | Type         | Null | Key | Default | Extra          |
+--------+--------------+------+-----+---------+----------------+
| id     | int          | NO   | PRI | NULL    | auto_increment |
| name   | varchar(100) | YES  |     | NULL    |                |
| uid    | varchar(100) | NO   |     | NULL    |                |
| pw     | varchar(100) | NO   |     | NULL    |                |
| gender | varchar(100) | YES  |     | NULL    |                |
+--------+--------------+------+-----+---------+----------------+
5 rows in set (0.03 sec)