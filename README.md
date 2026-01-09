# 🚀 Laravel Filament Role-Based School Management System

![Laravel](https://img.shields.io/badge/Laravel-12-red)
![Filament](https://img.shields.io/badge/Filament-Admin%20Panel-orange)
![PHP](https://img.shields.io/badge/PHP-8.4x-blue)
![MySQL](https://img.shields.io/badge/MySQL-Database-green)
![Spatie](https://img.shields.io/badge/Spatie-Roles%20%26%20Permissions-purple)

> **Portfolio Project | Fresher Laravel Developer**
> A clean, powerful, and role-based school management system built using **Laravel + Filament**, focusing on **real-world CRUD logic**, **admin panels**, and **secure role-based access control**.

---

## ⭐ Why This Project Matters

This project demonstrates my **hands-on backend development skills** using modern Laravel tools. Instead of building simple pages, I focused on:

* ✅ **Professional Admin Panel (Filament)**
* ✅ **Role-Based Access Control (RBAC)**
* ✅ **Real CRUD logic used in companies**
* ✅ **Clean database design**

This is not a tutorial-only project — it reflects **practical learning and implementation**.

---

## 📌 Project Summary

A **multi-user role-based web application** where different users access the system based on their role.

The entire system is managed using:

* **Single User model**
* **Spatie Role & Permission**
* **Filament Admin Panel**

Filament is used to quickly build **secure, scalable, and maintainable admin dashboards**.

---

## 👥 User Roles & Responsibilities

* 👑 **Super Admin**
  Full control over users, roles, permissions, and all data

* 🛠 **Admin**
  Manage schools, subjects, and student-related data

* 🏫 **School Admin**
  Handle subject-wise and school-wise information

* 🎓 **Student**
  View-only access (cannot create, update, or delete data)

* 👨‍💻 **Developer**
  System-level access for testing and maintenance

---

## 🔐 Security & Access Control

* Secure authentication using **Filament Auth**
* Authorization using **Spatie Roles & Permissions**
* Role-based visibility of CRUD actions
* Protected routes and admin resources

🔒 Example:

* Students ❌ cannot modify data
* Admins ✅ can create & update data
* Super Admin ✅ full access

---

## 🗄 Database & Backend Logic

* Structured relational database (MySQL)
* Foreign keys & relationships
* Scalable schema design
* Clean Eloquent ORM usage

The database was designed step-by-step to reflect **real application needs**.

---

## ⚙️ Core Features

* ✔ Filament Admin Dashboard
* ✔ Auto-generated CRUD using Filament Resources
* ✔ Role-based data access
* ✔ School & Subject Management
* ✔ Form validation & table filters

---

## 🧩 Tech Stack

| Technology | Purpose              |
| ---------- | -------------------- |
| Laravel    | Backend Framework    |
| Filament   | Admin Panel & CRUD   |
| PHP 8+     | Programming Language |
| MySQL      | Database             |
| Spatie     | Roles & Permissions  |

---

## 🚀 Installation Steps

```bash
git clone <repository-url>
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan filament:install
php artisan make:filament-user
php artisan serve
```

Admin Panel:

```
http://127.0.0.1:8000/admin
```

---

## 🪜 What I Learned (As a Fresher)

* How real admin panels are built using **Filament**
* Implementing **RBAC** in Laravel
* Writing clean CRUD logic
* Working with permissions & policies
* Designing scalable backend systems

---

## 💼 Portfolio Highlight

> This project represents my ability to **build production-style Laravel applications**, work with **modern admin tools**, and implement **secure role-based systems**.

---

## 👨‍💻 Developer

**Vinay Chavada**
Fresher Laravel Developer
Skills: Laravel, Filament, MySQL, Spatie, RBAC, CRUD

---

⭐ *This project is a key part of my developer portfolio and reflects my practical learning journey.*
