##commands and tools
-------------------

#Import Data to the mysql CSV
-----------------------------
mysqlimport  --ignore-lines=1 --fields-terminated-by=, --verbose --local -u root -p rootpass largedata sample_data.csv



#EXPLAIN Query
------------
explain select * from user




##PROCEDURES

#MySQL stored procedures advantages

*Typically stored procedures help increase the performance of the applications. Once created, stored procedures are compiled and stored in the database. However, MySQL implements the stored procedures slightly different. MySQL stored procedures are compiled on demand. After compiling a stored procedure, MySQL puts it into a cache. And MySQL maintains its own stored procedure cache for every single connection. If an application uses a stored procedure multiple times in a single connection, the compiled version is used, otherwise, the stored procedure works like a query.
*Stored procedures help reduce the traffic between application and database server because instead of sending multiple lengthy SQL statements, the application has to send only name and parameters of the stored procedure.
*Stored procedures are reusable and transparent to any applications. Stored procedures expose the database interface to all applications so that developers don’t have to develop functions that are already supported in stored procedures.
*Stored procedures are secure. The database administrator can grant appropriate permissions to applications that access stored procedures in the database without giving any permissions on the underlying database tables.

Besides those advantages, stored procedures have their own disadvantages, which you should be aware of before using them in your databases.
MySQL stored procedures disadvantages

*If you use a lot of stored procedures, the memory usage of every connection that is using those stored procedures will increase substantially. In addition, if you overuse a large number of logical operations inside store procedures, the CPU usage will also increase because the database server is not well-designed for logical operations.
*Constructs of stored procedures make it more difficult to develop stored procedures that have complicated business logic.
*It is difficult to debug stored procedures. Only a few database management systems allow you to debug stored procedures. Unfortunately, MySQL does not provide facilities for debugging stored procedures.
*It is not easy to develop and maintain stored procedures. Developing and maintaining stored procedures are often required a specialized skill set that not all application developers possess. This may lead to problems in both application development and maintenance phases.


#Create Procedure
---------------

DELIMITER //
 CREATE PROCEDURE GetCompanies()
   BEGIN
	SELECT * FROM largedata.sample_data;
   END //
 DELIMITER ;


