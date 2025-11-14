# 🌐 Laravel MVC Contact App

A simple and beautiful Laravel web application built using the **Model-View-Controller (MVC)** pattern.  
This project demonstrates clean routing, Blade templates, and form handling with database storage.


## 🚀 Features

- 🏠 Home, ℹ️ About, and 📩 Contact pages  
- 🎨 Beautiful modern UI with gradient design  
- 🧭 Follows Laravel MVC architecture  
- 🗄 Contact form with validation and database storage  
- ⚡ Flash messages for success and validation errors  
- 💾 Data stored using Eloquent ORM (`Message` model)



## 🛠️ Tech Stack

- **Framework:** Laravel 11+
- **Language:** PHP 8+
- **Database:** MySQL
- **Frontend:** Blade, HTML5, CSS3 (custom)
- **Icons:** Material Design Icons (MDI)



## 📂 Folder Structure

simpleApp/
│
├── app/
│ ├── Http/
│ │ └── Controllers/
│ │ ├── PageController.php
│ │ └── ContactController.php
│ ├── Models/
│ └── Message.php
│
├── database/
│ └── migrations/
│ └── create_messages_table.php
│
├── resources/
│ └── views/
│ ├── home.blade.php
│ ├── about.blade.php
│ └── contact.blade.php
│
├── routes/
│ └── web.php
│
└── .env.example

yaml
Copy code



## ⚙️ Setup Instructions

### 1️⃣ Clone Repository

git clone https://github.com/yourusername/laravel-mvc-contact-app.git
cd laravel-mvc-contact-app
2️⃣ Install Dependencies
bash
Copy code
composer install
3️⃣ Setup Environment
Copy .env.example to .env and update database info:


cp .env.example .env
php artisan key:generate
Edit .env:


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_mvc_app
DB_USERNAME=root
DB_PASSWORD=
4️⃣ Run Migrations

php artisan migrate
5️⃣ Start the Server

php artisan serve
Visit the app at 👉 http://127.0.0.1:8000

💬 Contact Form Functionality
Submits data via POST /contact

Validates inputs (name, email, message)

Stores in messages table

Displays success message after submission

Shows validation errors if inputs are invalid

📸 Screenshots

**Home**

<img width="1876" height="825" alt="image" src="https://github.com/user-attachments/assets/d7b781d3-905c-4be5-b20f-16f09db54a6b" />

**About**

<img width="1909" height="838" alt="image" src="https://github.com/user-attachments/assets/ad579791-118b-4679-970e-cfc9888bba38" />

**Contact**

<img width="1908" height="838" alt="image" src="https://github.com/user-attachments/assets/e50e56a3-0f42-4066-b542-ca7a21d028ea" />


🧑‍💻 Author
Muhammad Sohail
📍 Rawalpindi, Pakistan
📧 sohailqureshii369@gmail.com
🔗 LinkedIn
