# 👨‍💻 User Management System (CRUD)

<div align="center">

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34C26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)

**سیستم مدیریت کاربران | User Management System**

A professional PHP-based CRUD application for managing users with full features

[Features](#-features) • [Installation](#-installation) • [Usage](#-usage) • [API](#-api) • [License](#-license)

</div>

---

## 📋 Overview

This is a **beginner-friendly yet professional** backend project demonstrating:
- ✅ Complete CRUD operations (Create, Read, Update, Delete)
- ✅ Database management with MySQL
- ✅ Clean code architecture
- ✅ RESTful principles
- ✅ Error handling
- ✅ User-friendly interface

Perfect for learning database operations and web development fundamentals!

---

## ⭐ Features

### Core Functionality
- 👤 **Add Users** - Create new user profiles with validation
- 📖 **View Users** - Display all users in a responsive table
- ✏️ **Edit Users** - Update user information
- 🗑️ **Delete Users** - Remove user records
- 🔍 **Search** - Find users by name or ID
- 📊 **Statistics** - View user count and analytics

### Technical Features
- 🛡️ Input validation and sanitization
- 🔐 SQL injection prevention
- 📱 Responsive design (mobile-friendly)
- ⚡ Fast and optimized queries
- 📝 Well-documented code
- 🎨 Clean UI/UX

---

## 🚀 Installation

### Prerequisites
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Apache/Nginx web server
- Composer (optional)

### Step-by-Step Setup

1. **Clone the repository**
   ```bash
   git clone https://github.com/mehdifrtgyhuj-debug/php-crud-.git
   cd php-crud-
   ```

2. **Create database**
   ```sql
   CREATE DATABASE user_management;
   USE user_management;
   
   CREATE TABLE users (
     id INT PRIMARY KEY AUTO_INCREMENT,
     first_name VARCHAR(50) NOT NULL,
     last_name VARCHAR(50) NOT NULL,
     email VARCHAR(100) UNIQUE NOT NULL,
     phone VARCHAR(15),
     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
     updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
   );
   ```

3. **Configure database connection**
   ```php
   // config/database.php
   <?php
   define('DB_HOST', 'localhost');
   define('DB_USER', 'root');
   define('DB_PASS', 'password');
   define('DB_NAME', 'user_management');
   ?>
   ```

4. **Start your server**
   ```bash
   php -S localhost:8000
   ```

5. **Open in browser**
   ```
   http://localhost:8000
   ```

---

## 💡 Usage

### Adding a User
1. Click on "Add New User" button
2. Fill in the form with user details
3. Click "Save" to add to database

### Viewing Users
- Navigate to the "Users" page
- See all users in a formatted table
- View user details by clicking on each row

### Editing a User
1. Click the "Edit" button next to the user
2. Update the information
3. Click "Update" to save changes

### Deleting a User
1. Click the "Delete" button
2. Confirm the deletion
3. User will be removed from the database

---

## 📡 API Endpoints

### GET Requests
```
GET /api/users.php                 # Get all users
GET /api/users.php?id=1            # Get specific user
```

### POST Requests
```
POST /api/users.php                # Create new user
Body: {
  "first_name": "محمد",
  "last_name": "احمدی",
  "email": "user@example.com",
  "phone": "+98 912 345 6789"
}
```

### PUT Requests
```
PUT /api/users.php?id=1            # Update user
Body: {
  "first_name": "محمد",
  "last_name": "احمدی",
  "email": "newemail@example.com"
}
```

### DELETE Requests
```
DELETE /api/users.php?id=1         # Delete user
```

---

## 📁 Project Structure

```
php-crud-/
├── config/
│   └── database.php              # Database configuration
├── api/
│   └── users.php                 # API endpoints
├── public/
│   ├── index.php                 # Main page
│   ├── add.php                   # Add user form
│   ├── edit.php                  # Edit user form
│   ├── css/
│   │   └── style.css             # Styling
│   └── js/
│       └── script.js             # Frontend logic
├── classes/
│   └── User.php                  # User class
├── README.md                     # This file
└── LICENSE                       # MIT License
```

---

## 🔒 Security Features

- ✅ **Prepared Statements** - Prevent SQL injection
- ✅ **Input Validation** - Validate all inputs
- ✅ **Error Handling** - Proper exception handling
- ✅ **CSRF Protection** - Token verification
- ✅ **Password Hashing** - Secure password storage
- ✅ **XSS Prevention** - HTML entity encoding

---

## 📊 Database Schema

| Column | Type | Description |
|--------|------|-------------|
| id | INT | Primary key, auto-increment |
| first_name | VARCHAR(50) | User's first name |
| last_name | VARCHAR(50) | User's last name |
| email | VARCHAR(100) | Unique email address |
| phone | VARCHAR(15) | Contact phone number |
| created_at | TIMESTAMP | Creation date/time |
| updated_at | TIMESTAMP | Last update date/time |

---

## 🎓 Learning Outcomes

After completing this project, you'll understand:
- 📚 How to build a complete CRUD application
- 🗄️ Database design and relationships
- 🔄 HTTP methods and RESTful APIs
- 🛡️ Web application security basics
- 📱 Responsive web design
- 🧹 Clean code practices
- 🧪 Basic testing and debugging

---

## 🐛 Troubleshooting

### Database Connection Error
```
Error: Could not connect to database
Solution: Check database credentials in config/database.php
```

### 404 Error on Pages
```
Error: Page not found
Solution: Ensure files are in correct directory and server is running
```

### Form Validation Error
```
Error: Invalid email format
Solution: Use a valid email address in the format: user@example.com
```

---

## 🚀 Future Enhancements

- [ ] User authentication and login system
- [ ] Role-based access control (RBAC)
- [ ] Advanced search and filtering
- [ ] Bulk operations
- [ ] Export to CSV/PDF
- [ ] API documentation (Swagger)
- [ ] Unit tests
- [ ] Docker containerization

---

## 📚 Resources

- [PHP Official Documentation](https://www.php.net/manual/)
- [MySQL Documentation](https://dev.mysql.com/doc/)
- [REST API Best Practices](https://restfulapi.net/)
- [OWASP Security Guidelines](https://owasp.org/)

---

## 🤝 Contributing

Contributions are welcome! Here's how:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

---

## 📝 License

This project is licensed under the **MIT License** - see the [LICENSE](LICENSE) file for details.

```
MIT License

Copyright (c) 2024 Mehdi Fartighiyej

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction...
```

---

## 👨‍💼 Author

**Mehdi Fartighiyej**
- GitHub: [@mehdifrtgyhuj-debug](https://github.com/mehdifrtgyhuj-debug)
- Email: your-email@example.com
- LinkedIn: [Your Profile]

---

## 📞 Support

If you have any questions or need help:
1. Check the [Troubleshooting](#-troubleshooting) section
2. Open an [Issue](https://github.com/mehdifrtgyhuj-debug/php-crud-/issues)
3. Contact the author

---

<div align="center">

⭐ If this project helped you, please give it a star!

**Made with ❤️ by Mehdi Fartighiyej**

</div>