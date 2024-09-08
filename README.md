

# **Blogging Platform**

A simple blogging platform built using the Laravel framework. This platform supports creating, editing, and deleting blog posts, managing categories and tags, user authentication, and commenting on posts. It also includes role-based access control (RBAC) for different user roles.

## **Table of Contents**
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Routes](#routes)
- [Testing](#testing)
- [Contributing](#contributing)
- [License](#license)

## **Features**
- **User Authentication**: Built-in Laravel user authentication system.
- **CRUD for Blog Posts**: Create, Read, Update, and Delete functionality for blog posts.
- **Categories and Tags**: Classify blog posts with categories and tags.
- **Comments System**: Users can comment on posts.
- **Search and Filter**: Search blog posts by title or content.
- **Role-Based Access Control (RBAC)**: Assign roles to users (e.g., Admin, Author).
- **Responsive Design**: Built with Bootstrap for mobile-friendly views.
- **SEO-Friendly URLs**: Unique slug generation for blog posts.

## **Installation**

### **1. Clone the Repository**
```bash
git clone https://github.com/yourusername/blogging-platform.git
cd blogging-platform
```

### **2. Install Dependencies**
Make sure you have Composer installed. Run the following command to install the necessary dependencies:
```bash
composer install
```

### **3. Configure Environment**
Copy the `.env.example` to create a new `.env` file:
```bash
cp .env.example .env
```

Update the `.env` file with your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog_platform
DB_USERNAME=root
DB_PASSWORD=your_password
```

### **4. Generate Application Key**
Generate a new application key:
```bash
php artisan key:generate
```

### **5. Migrate the Database**
Run the following command to migrate the database:
```bash
php artisan migrate
```

### **6. Run the Application**
Start the local development server:
```bash
php artisan serve
```

Visit `http://127.0.0.1:8000` in your browser to view the application.

## **Usage**

### **1. User Registration and Authentication**
- Users can register, login, and manage their account.
- Admin users can assign roles to registered users (e.g., Author, Admin).

### **2. Managing Blog Posts**
- Authors and admins can create, edit, or delete blog posts.
- Posts can be categorized into **Categories** and tagged with multiple **Tags**.

### **3. Comments**
- Users can comment on blog posts after logging in.

### **4. Search and Filter**
- Use the search bar to find blog posts by title or content.

### **5. Roles and Permissions**
- **Admin**: Full access to all features.
- **Author**: Can manage their own posts, but cannot edit other users' posts.

## **Routes**

### **Public Routes**
- `/`: Homepage displaying the latest blog posts.
- `/posts/{id}`: View a single blog post.
- `/register`: Register a new account.
- `/login`: Login to an existing account.
- `/search`: Search for blog posts.

### **Authenticated Routes**
- `/dashboard`: User dashboard with post management.
- `/posts/create`: Create a new blog post (Author/Admin).
- `/posts/{id}/edit`: Edit an existing blog post (Author/Admin).
- `/posts/{id}/delete`: Delete a blog post (Author/Admin).
- `/comments/{id}/create`: Add a comment to a post.

## **Testing**

This project includes unit tests for core functionalities like post creation, authentication, and role management. To run the tests, use:

```bash
php artisan test
```

## **Contributing**

Contributions are welcome! Please follow these steps:

1. Fork the repository.
2. Create a new feature branch: `git checkout -b my-feature`.
3. Commit your changes: `git commit -am 'Add new feature'`.
4. Push the branch: `git push origin my-feature`.
5. Submit a pull request.

## **License**

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.
