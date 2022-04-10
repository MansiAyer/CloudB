# CloudB
Cloud based application template for projects

This repo is to be cloned into /var/www/html
from tutorial https://docs.aws.amazon.com/AmazonRDS/latest/UserGuide/CHAP_Tutorials.WebServerDB.CreateWebServer.html

httpd commands ref
https://techgoeasy.com/stop-start-httpd-service/

connect to mysql
```
mysql -h [INSERT_ENDPOINT] -P [INSERT_PORT] -u [INSERT_USERNAME] -p
```
  
  
mysql ref
```
mysql > SHOW databases; \\lists existing databases
mysql > USE [insert_db_name]; \\performs future transactions on specified db
mysql > SHOW TABLES; \\shows tables in db that is currently specified by USE, throws error if no db specified
mysql > SHOW COLUMNS FROM [insert_table_name]; \\shows columns from db
```
https://dev.mysql.com/doc/refman/8.0/en/sql-statements.html