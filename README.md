# 🎓 Laravel Filament Role-Based School Management System

![Laravel](https://img.shields.io/badge/Laravel-12-red)
![Filament](https://img.shields.io/badge/Filament-Admin%20Panel-orange)
![PHP](https://img.shields.io/badge/PHP-8.4x-blue)
![MySQL](https://img.shields.io/badge/Database-MySQL-green)
![Spatie](https://img.shields.io/badge/Spatie-Roles%20%26%20Permissions-purple)

> A **role-based school management system** built using **Laravel + Filament Admin Panel**, designed as a **fresher-friendly project** to demonstrate CRUD operations, role-based access control, and real-world backend logic.

---

## 📌 Project Overview

This project is an extension of a Laravel role-based application, now implemented using **Filament** to build a powerful and clean **admin panel**.

The application uses **only the User model** with **Spatie Role & Permission** to manage different types of users and their access levels.

Filament helps in rapidly creating:

* Admin dashboards
* CRUD resources
* Role-based UI access

---

## 👥 User Roles Implemented

The system supports multiple roles:

* 👑 **Super Admin** – Full system access (users, roles, permissions, all data)
* 🛠 **Admin** – Manage schools, subjects, and students
* 🏫 **School Admin** – Subject-wise and school-wise data handling
* 🎓 **Student** – View-only access
* 👨‍💻 **Developer** – Technical/maintenance access

All roles and permissions are managed using **Spatie Laravel Permission** and integrated into **Filament**.

---

## 🔐 Authentication & Authorization

* Filament built-in authentication
* Role-based authorization using **Spatie**
* Filament Policies & Permissions
* Resource-level access control

### Access Rules Example

* Students ➜ Can only view records
* Admins ➜ Can create & update records
* Super Admin ➜ Full CRUD + role management

---

## 🗄 Database Design

The database was created step-by-step:

1. Default Laravel `users` table
2. Spatie tables (`roles`, `permissions`, etc.)
3. School-related tables
4. Subject-wise tables

### Key Focus

* Proper relationships
* Foreign keys
* Clean and scalable schema

---

## ⚙️ Features Implemented

### ✅ Filament Admin Panel

* Auto-generated CRUD using Filament Resources
* Clean UI for admin operations
* Form & table builders

### ✅ CRUD Operations

* Create, Read, Update, Delete
* Role-restricted actions
* Validation handled via Filament forms

### ✅ School & Subject Management

* Admin can manage school details
* Subject-wise data entry
* Data visibility based on role

---

## 🧩 Libraries & Packages Used

* **Laravel Framework**
* **Filament Admin Panel**
* **Spatie Laravel Permission**
* Eloquent ORM
* Blade (minimal usage, Filament UI focused)

---

## 🛠 Tech Stack

| Technology | Usage                        |
| ---------- | ---------------------------- |
| Laravel    | Backend Framework            |
| Filament   | Admin Panel & CRUD           |
| PHP 8+     | Programming Language         |
| MySQL      | Database                     |
| Spatie     | Role & Permission Management |

---

## 🚀 Installation & Setup Steps

```bash
# Clone the repository
git clone <repository-url>

# Install dependencies
composer install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate

# Seed roles & permissions
php artisan db:seed

# Install Filament
php artisan filament:install

# Create Filament user (Super Admin)
php artisan make:filament-user

# Run the application
php artisan serve
```

Access Admin Panel:

```
http://127.0.0.1:8000/admin
```

---

## 🪜 Fresher Learning Steps (How I Built This Project)

1. Learned Laravel basics (MVC, routing, migrations)
2. Created User model and authentication
3. Integrated **Spatie Role & Permission**
4. Designed database schema
5. Installed and explored **Filament Admin Panel**
6. Created Filament Resources for CRUD
7. Applied role-based access in Filament
8. Tested different user roles

---

## 🧪 What This Project Demonstrates (For Freshers)

* Real-world admin panel development
* Role-based authorization
* Clean backend logic
* CRUD without writing excessive frontend code
* Professional Laravel + Filament usage

---

## 📸 Screenshots (Optional)

You can add screenshots of:

* Filament Login Page
* Admin Dashboard
* CRUD Resource Screens
* Role Management UI

---

## 👨‍💻 Developer

**Name:** Vinay Chavada
**Profile:** Fresher Laravel Developer
**Skills:** Laravel, Filament, Spatie, CRUD, RBAC

---

## 📄 License

This project is created for **learning, practice, and portfolio purposes**.

---

⭐ *This project reflects my hands-on learning with Laravel Filament as a fresher.*
