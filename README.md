# Laravel User Management System

A role-based User Management System built with **Laravel 12**, **PHP**, **MySQL**, and **Bootstrap**.

This project demonstrates user authentication, role-based access control, user CRUD operations, profile management, dashboard functionality, search, pagination, and responsive UI.

---

## 📌 Project Overview

The Laravel User Management System is a web application designed to manage users efficiently through an admin dashboard.

The application provides administrators with the ability to:

- Manage users
- Create new users
- Edit user information
- View user details
- Delete users
- Assign user roles
- Search users
- Paginate user records
- Manage user profiles
- Control access based on user roles
- View dashboard statistics

The project follows Laravel's MVC architecture and uses reusable controllers, models, migrations, Blade components, middleware, and route-based access control.

---

## 🚀 Features

### 🔐 Authentication

- User Registration
- User Login
- User Logout
- Password Hashing
- Authentication Middleware
- Protected Routes

### 👥 User Management

- Add User
- Edit User
- View User
- Delete User
- User Listing
- User Search
- Pagination
- User Profile Management

### 🛡️ Role Management

The system supports role-based access.

Example roles:

- Admin
- User

Different users can be given different permissions depending on their role.

### 📊 Dashboard

The dashboard provides an overview of the system.

Example statistics:

- Total Users
- Active Users
- Inactive Users
- User Roles

### 🎨 User Interface

- Bootstrap-based responsive design
- Clean dashboard layout
- Responsive tables
- Form validation messages
- Alert notifications
- Reusable Blade layouts

---

## 🛠️ Technologies Used

| Technology | Usage |
|------------|-------|
| PHP | Backend development |
| Laravel 12 | PHP Framework |
| MySQL | Database |
| Blade | Templating engine |
| Bootstrap | UI / Responsive design |
| JavaScript | Client-side functionality |
| jQuery | UI interactions |
| Vite | Frontend asset management |
| Git | Version control |
| GitHub | Source code management |

---

## 🏗️ Project Architecture

The application follows the Laravel MVC architecture.

```text
User
 │
 ├── Authentication
 │
 ├── Dashboard
 │
 ├── User Management
 │     ├── User List
 │     ├── Add User
 │     ├── Edit User
 │     ├── View User
 │     └── Delete User
 │
 ├── Role Management
 │
 └── Profile Management
