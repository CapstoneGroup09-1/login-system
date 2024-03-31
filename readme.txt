Simple Configuration Manual

Step 1: Install and Extract WAMP Environment

Firstly, you need to download and install the WAMP environment. WAMP is a software package that integrates a web server (Apache), a database (MySQL), and a PHP interpreter, making it suitable for website development. After downloading and installing WAMP, you will get a compressed package. Extract this package and place the extracted folder in the C:\wamp64\www directory.

Step 2: Place the Login Files

Next, move your login folder (including all its internal files) to the C:\wamp64\www directory. This will place your login project in the root directory of the WAMP server, allowing access through the web server.

Step 3: Import the Database

Within your login folder, there is a database file named lianxi.sql. This file contains the database structure and data required for your website. You need to import this database file into the MySQL database of WAMP. Open the WAMP management interface, find the import function for the MySQL database, and select the lianxi.sql file for import.

Step 4: Modify Database Configuration

After successfully importing the database, you need to modify the database configuration information in your login project. Open the C:\wamp64\www\login\php\config.php file, find the section for the database password (usually labeled as pass), and change the default password to match your own database password. If your database password is empty, use root; the username (username) is usually also root.

Step 5: Access the Login Page

Once the configuration is complete, you can access your login page through a web browser. Enter http://localhost:8080/login/login.html in the address bar of your browser. Here, localhost refers to your local machine's address, and 8080 is the port number for the WAMP server. If you changed the port number during the WAMP installation, you need to enter the port number you set.

Notes
Ensure that the WAMP service is running, and the MySQL database is also operational.