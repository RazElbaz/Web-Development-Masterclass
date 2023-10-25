# Download 

mySQL:  
[https://dev.mysql.com/downloads/file/?id=520406](https://dev.mysql.com/downloads/windows/installer/8.0.html)

Windows (x86, 32-bit), MSI Installer	8.0.34	2.4M	
Download
(mysql-installer-web-community-8.0.34.0.msi)

# RUN  

XAMPP control Application -> MySQL -> Start


**Start MySQL in Safe Mode (Windows):**
You'll start the MySQL server in safe mode, which allows you to reset the root password without needing to enter a password.

Open the Command Prompt as an administrator:

Press Win + S, type "Command Prompt," right-click on it, and choose "Run as administrator."
Navigate to the MySQL bin directory, which is typically located in the XAMPP installation folder. Use the cd command to change directories:

**bash**
cd C:\xampp\mysql\bin
Start MySQL in safe mode:

**bash**

mysqld --skip-grant-tables

**Open a New Command Prompt Window:**
While the MySQL server is running in safe mode, open a new Command Prompt window or tab. You'll use this to reset the password.

**Connect to MySQL:**
In the new Command Prompt window, connect to MySQL without specifying a password. This is possible because the server is running in safe mode, which doesn't require a password:

**bash**

mysql -u root
USE mysql;
MariaDB [mysql]> ```SET PASSWORD = PASSWORD('mine');```


**Test the New Password:**  
You should now be able to connect to MySQL with the new root password:

**bash**

mysql -u root -p
