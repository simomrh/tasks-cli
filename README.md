# 🧩 tasks-cli

A simple PHP CLI-based Task Manager that allows you to manage tasks via command line — with support for file-based storage (JSON) and optional MySQL database sync.

---

## 🚀 Features

- Add, list, update, mark, and delete tasks via CLI
- Stores tasks in a local `task.json` file
- Optionally syncs tasks to a MySQL database
- Built using PHP OOP and Composer autoloading

---

## ⚙️ Requirements

- PHP 8.0+
- Composer
- MySQL (via XAMPP or similar stack)
- XAMPP (for local development environment)

---

## 📦 Installation

### 1. Clone the repository

```bash
git clone https://github.com/simomrh/tasks-cli.git
cd tasks-cli

## 📦 2. Start XAMPP
Start Apache and MySQL using the XAMPP Control Panel

Open phpMyAdmin

## 📦 3. Create the MySQL Database

Create a new database called tasks

Run the following SQL to create the tasks table:

# CREATE TABLE tasks (
#     id INT PRIMARY KEY,
#     description TEXT,
#     status VARCHAR(50),
#     createdAt DATETIME,
#     updatedAt DATETIME
# );

## 📦 4. Install dependencies

composer install


## 🛠 Usage

php src/cli.php add "Finish README" --db


## project URL 
http://localhost/New%20php/store/task.json
