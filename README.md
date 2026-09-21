# Student Management System

A simple CRUD web application for managing student records, built on the CodeIgniter 3 PHP framework.

## Features

- View a list of all enrolled students
- Add a new student record
- Edit an existing student's details
- Delete a student record
- Duplicate student ID detection when adding
- Flash messages for save / update / delete / error actions

## Student Fields

| Field | Description |
|---|---|
| Student ID | Unique identifier for the student |
| Name | Full name of the student |
| Gender | Male / Female |
| Program | Study program (e.g. Informatics Engineering, Information Systems, Informatics Management, Computer Accounting) |
| Level | Degree level (S1 / D3) |
| Semester | Current semester (1–8) |
| Phone | Contact phone number |

## Tech Stack

- **Framework:** CodeIgniter 3 (PHP)
- **Database:** MySQL
- **Frontend:** Plain HTML with inline CSS (no external UI framework)

## Project Structure

```
student-management-system/
├── application/
│   ├── controllers/
│   │   └── Student.php          # Handles list, add, edit, delete actions
│   ├── models/
│   │   └── M_student.php        # Database queries for the tbl_student table
│   ├── views/
│   │   ├── list.php              # Student list page
│   │   ├── add.php               # Add student form
│   │   └── edit.php              # Edit student form
│   └── config/
│       ├── database.php          # Database connection settings
│       ├── routes.php            # Default route -> student controller
│       └── config.php            # Base URL and core config
├── system/                       # CodeIgniter core framework
├── student_management_system.sql # Database schema
└── index.php                     # Application entry point
```

## Requirements

- PHP 5.6 – 7.x (CodeIgniter 3 compatible)
- MySQL / MariaDB
- Apache or Nginx with `mod_rewrite` enabled (or run with PHP's built-in server)

## Setup

1. **Clone or extract the project** into your web server's document root, e.g.:
   ```
   htdocs/student-management-system/
   ```

2. **Create the database** by importing the provided SQL file:
   ```bash
   mysql -u root -p < student_management_system.sql
   ```
   This creates the `student_management_system` database and the `tbl_student` table.

3. **Configure the database connection** in `application/config/database.php`:
   ```php
   'hostname' => 'localhost',
   'username' => 'root',
   'password' => '',
   'database' => 'student_management_system',
   ```

4. **Set the base URL** in `application/config/config.php` to match your local setup:
   ```php
   $config['base_url'] = 'http://localhost/student-management-system/';
   ```

5. **Run the application**
   - Via Apache/XAMPP/WAMP: visit `http://localhost/student-management-system/`
   - Or with PHP's built-in server:
     ```bash
     php -S localhost:8000
     ```
     then visit `http://localhost:8000/`

## Routes

| URL | Action |
|---|---|
| `/student` | List all students |
| `/student/add` | Add a new student |
| `/student/edit/{student_id}` | Edit a student |
| `/student/delete/{student_id}` | Delete a student |

## License

This project is provided as-is for educational and personal use.
