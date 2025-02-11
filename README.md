# Review-on-Categories
its basically a php project through mysqli database where users share their review on questions. A simple and easy to use website for given review about question and their categories , unique color combination applied.
README: Setting Up a PHP Project with XAMPP
1. Introduction
This guide will help you set up a PHP project using XAMPP, including running PHP files, setting up a database with phpMyAdmin, and accessing your project via a local server.

2. Prerequisites
XAMPP Installed (Download from: https://www.apachefriends.org)
Basic knowledge of PHP, HTML, and databases
3. Installing & Running XAMPP
Download & Install XAMPP

Run the installer and follow the instructions.
Select Apache and MySQL during installation.
Start XAMPP

Open XAMPP Control Panel
Start Apache and MySQL services
Verify Installation

Open your browser and go to:
arduino
Copy
Edit
http://localhost/
If you see the XAMPP welcome page, XAMPP is installed successfully.
4. Setting Up Your PHP Project
Navigate to the htdocs Folder

Open C:\xampp\htdocs\ (Windows) or /Applications/XAMPP/htdocs/ (Mac/Linux).
Create a New Project Folder

Inside htdocs, create a new folder (e.g., myproject).
Add PHP Files

Inside myproject, create an index.php file:
php
Copy
Edit
<?php
echo "Hello, XAMPP! Your PHP project is running.";
?>
Run Your PHP Project

Open a browser and go to:
arduino
Copy
Edit
http://localhost/myproject/
You should see:
arduino
Copy
Edit
Hello, XAMPP! Your PHP project is running.
5. Setting Up a Database Using phpMyAdmin
Open phpMyAdmin

In your browser, visit:
arduino
Copy
Edit
http://localhost/phpmyadmin/
Create a New Database

Click Databases > Enter database name (e.g., mydatabase) > Click Create.
Create a Table

Select mydatabase > Click SQL tab > Run:
sql
Copy
Edit
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  email VARCHAR(100) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL
);
Insert Sample Data

sql
Copy
Edit
INSERT INTO users (name, email, password) VALUES
('John Doe', 'john@example.com', '123456');
Connect PHP to MySQL

Create db.php in your project folder:
php
Copy
Edit
<?php
$conn = new mysqli("localhost", "root", "", "mydatabase");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Database Connected!";
?>
Test Database Connection

Open your browser and go to:
arduino
Copy
Edit
http://localhost/myproject/db.php
If successful, it will show:
nginx
Copy
Edit
Database Connected!
6. Running Your PHP Project with Database
Create a login.php file
php
Copy
Edit
<?php
include "db.php";

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "User: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
}

$conn->close();
?>
Run in Browser
arduino
Copy
Edit
http://localhost/myproject/login.php
You will see the list of users from the database.
7. Common Issues & Fixes
Apache or MySQL Not Starting?

Change port from 80 to 8080:
Open XAMPP Control Panel > Click Config (next to Apache) > Open httpd.conf
Find Listen 80 and change it to Listen 8080
Restart Apache
Access project via http://localhost:8080/myproject/
phpMyAdmin Access Denied?

Reset MySQL password in C:\xampp\phpMyAdmin\config.inc.php:
php
Copy
Edit
$cfg['Servers'][$i]['password'] = ''; // Remove any password set
Restart MySQL and try again.
8. Summary
XAMPP provides an easy local server for PHP & MySQL.
Store your projects in htdocs and access them via http://localhost/{your_project}.
Manage your database using phpMyAdmin (http://localhost/phpmyadmin/).
🎉 Now you're ready to build PHP projects using XAMPP! 🚀
