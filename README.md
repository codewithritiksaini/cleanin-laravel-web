# 🧹 Cleanin Laravel Web

[![Laravel](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com/)  
[![PHP](https://img.shields.io/badge/PHP-8.3-blue.svg)](https://www.php.net/)  
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

---

## 🌍 Live Demo  
🔗 [https://cleanin.rikkisaini.in/](https://cleanin.rikkisaini.in/)

---

## 📖 About the Project  

**Cleanin Laravel Web** is a cleaning service website built with **Laravel**.  
The project is designed to help cleaning service providers showcase their services, manage client requests, and maintain a professional online presence.  

It includes:  
- Service showcase pages  
- Contact & inquiry forms  
- Admin panel for management  
- Modern & responsive UI  

---

## 📂 Project Pages  

The application contains the following main pages:

- **Home**  
- **About**  
- **Blog**  
- **Services**  
- **Contact**  
- **Error Pages** (from `resources/views/errors/` e.g. `404`, `403`, etc.)  
- **Privacy Policy**  
- **Terms & Conditions**  
- **Refund Policy**  

---

## ⚙️ Tech Stack  
- **Backend**: Laravel (PHP 8.2)  
- **Frontend**: Blade, TailwindCSS  
- **Database**: MySQL  
- **Tools**: Composer, NPM, Artisan  

---

## 🚀 Installation & Setup  

Follow these steps to run the project locally:

### 1️⃣ Clone the Repository
```bash
# via SSH
git clone git@github.com:codewithrikkisaini/cleanin-laravel-web.git

# via HTTPS
git clone https://github.com/codewithrikkisaini/cleanin-laravel-web.git
```

### 2️⃣ Install Dependencies
```bash
# Install PHP dependencies
composer install

# Install JS dependencies
npm install && npm run dev
```

### 3️⃣ Configure Environment
```bash
cp .env.example .env
```
- Update `.env` file with your database credentials and app settings.  
- Generate application key:  
```bash
php artisan key:generate
```

### 4️⃣ Database Setup
```bash
php artisan migrate
```

### 5️⃣ Run the Application
```bash
php artisan serve
```
App will be available at: `http://127.0.0.1:8000`

---

## 🤝 Contributing  

This is a **practice project** and I am open to collaboration.  
- If you want to **contribute and grow this project further**, feel free to fork and submit pull requests.  
- If you have **suggestions for changes or improvements**, please share them with me 👉 [https://rikkisaini.in/](https://rikkisaini.in/)  

---

## 📄 License  
This project is licensed under the [MIT License](LICENSE).  

---
