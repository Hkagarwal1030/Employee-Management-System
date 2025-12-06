# Employee-Management-System
👨‍💼 Employee Management System (PHP + MySQL)










A simple and efficient Employee Entry & Listing System built using PHP, MySQL, and HTML.
This system allows users to add employee details, store them in a database, and auto-display all saved entries in a formatted table.

✨ Features
✔ Employee Entry Form

Full Name

Email

Department (dropdown)

Position

Joining Date

✔ Secure Database Insertion

Uses prepared statements to prevent SQL injection

Displays confirmation message after successful entry

✔ Employee List Table

Fetches and displays all employees from the MySQL database

Shows ID, Name, Email, Department, Position, Joining Date

✔ Clean & Functional UI

Form + table layout

Real-time rendering of inserted data

📂 Project Structure
/employee-management
│── index.php
│── README.md

🛠️ Technology Stack
Technology	Purpose
PHP	Backend logic & request handling
MySQL	Database for storing employee records
HTML	UI markup
CSS (inline/optional)	Styling the UI
🗄️ Database Setup

Run the following SQL queries in phpMyAdmin or MySQL CLI:

CREATE DATABASE employee_db;

USE employee_db;

CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(200) NOT NULL,
    email VARCHAR(200) NOT NULL,
    department VARCHAR(100),
    position VARCHAR(150),
    joining_date DATE
);

🚀 How to Run the Project
1️⃣ Move files into your local server directory

For XAMPP:

htdocs/employee-management/


For WAMP:

www/employee-management/

2️⃣ Start Apache & MySQL

Open XAMPP Control Panel → Start both services.

3️⃣ Visit the project in your browser
http://localhost/employee-management/

4️⃣ Add Employees

Fill the form → Submit → Data gets saved into database.

5️⃣ The Employee List refreshes automatically

Inserted employees appear in the table below the form.

🔒 Security Notes

Uses prepared statements for safe SQL insertion

Should be deployed only in controlled environments unless enhanced with authentication

📌 Future Enhancements

Add update/delete options

Add pagination

Add search & filter features

Add admin login / authentication

Convert to MVC structure

🤝 Contributing

Feel free to fork, improve, and make pull requests.

Fork the repository

Create a new branch

Commit your changes

Open a PR

📄 License

This project is licensed under the MIT License.
