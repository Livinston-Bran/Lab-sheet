# ATI Website - Lecturer Portal

This repository contains the code for the lecturer portal of the ATI (Assumption of Technology and Innovation) website. The portal allows lecturers to register, log in, view a personalized dashboard, and log out. The system is built using PHP and MySQL DBMS for efficient data management.

## Table of Contents
- [Prerequisites](#prerequisites)
- [Database Setup](#database-setup)
- [Installation](#installation)
- [Usage](#usage)
- [File Structure](#file-structure)
- [Contributing](#contributing)
- [License](#license)

## Prerequisites
Before you begin, ensure that you have the following software installed on your system:
- PHP (version 7.0 or higher)
- MySQL DBMS
- Web server (e.g., Apache, Nginx)

## Database Setup
1. Create a MySQL database named `ATIWEB`.
2. Execute the SQL script in `database.sql` to create the necessary tables (`Lecturer` and `Course`).

## Installation
1. Clone this repository to your local machine.
   ```bash
   git clone https://github.com/Livinston-Bran/Lab-sheet.git
   ```

2. Move the project files to your web server's root directory.

## Usage
1. Access the registration form at `http://yourdomain.com/register.php` to register as a lecturer.
2. After registration, use the login form at `http://yourdomain.com/login.php` to log in.
3. Upon successful login, you will be redirected to the dashboard at `http://yourdomain.com/dashboard.php`.
4. Logout using the logout link at the top of the dashboard.

## File Structure
- `register.php`: Lecturer registration form.
- `login.php`: Lecturer login form.
- `dashboard.php`: Lecturer dashboard displaying personalized information.
- `logout.php`: Logout functionality for lecturers.
- `database.sql`: SQL script for creating the necessary tables.

## Contributing
Feel free to contribute by opening issues or submitting pull requests. Please follow the [Bran Livinston](https://branlivinston.bio.link/).

## License
This project is licensed under the [MIT License](LICENSE).
