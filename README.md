# 🙏 Faith & Flourishing

> **Helping teens overcome cognitive distortions through the integration of Cognitive Behavioral Therapy (CBT) and Catholic faith.**

[![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=flat&logo=laravel)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.4-777BB4?style=flat&logo=php)](https://php.net)
[![Filament](https://img.shields.io/badge/Filament-4.x-FDAE4B?style=flat)](https://filamentphp.com)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

**Live Demo:** [emiliokofficial.com](https://emiliokofficial.com)

---

## 🌟 Mission

Faith & Flourishing is a web application designed to support teenagers struggling with cognitive distortions that can contribute to depression, anxiety, and other mental health challenges. By combining evidence-based **Cognitive Behavioral Therapy (CBT)** techniques with the spiritual foundation of **Catholic faith**, we create a holistic approach to teen mental wellness.

Our goal is to provide developmentally supportive tools that help teens think about themselves, others, and reality in ways that promote flourishing and mental well-being.

---

## ✨ Features

### Current Features
- 🔐 **User Authentication** - Secure registration, login, and two-factor authentication (2FA)
- 👤 **User Profiles** - Personalized user accounts with profile management
- 🛡️ **Admin Panel** - Powerful content management system powered by Filament v4
- 📱 **Responsive Design** - Beautiful, modern UI built with Tailwind CSS
- 🎨 **Community Focus** - Inclusive design showcasing diverse support networks

### Planned Features
- 📝 **CBT Worksheets** - Interactive exercises for identifying and challenging cognitive distortions
- 🙏 **Faith Integration** - Scripture-based reflections and prayers for spiritual support
- 📊 **Progress Tracking** - Monitor personal growth and mental wellness journey
- 👥 **Support Network** - Connect with mentors, counselors, and peer support
- 📚 **Resource Library** - Educational content about mental health, CBT, and faith
- 🎯 **Daily Check-ins** - Mood tracking and reflection prompts
- 🌈 **Crisis Resources** - Immediate access to mental health support services

---

## 🛠️ Technology Stack

### Backend
- **[Laravel 12](https://laravel.com)** - Modern PHP web framework
- **[PHP 8.4](https://php.net)** - Latest PHP version with performance improvements
- **[Laravel Jetstream](https://jetstream.laravel.com)** - Authentication scaffolding with 2FA support
- **[Filament 4](https://filamentphp.com)** - Admin panel for content management
- **[Livewire 3](https://livewire.laravel.com)** - Dynamic, reactive interfaces without JavaScript complexity

### Frontend
- **[Tailwind CSS 3](https://tailwindcss.com)** - Utility-first CSS framework
- **[Alpine.js](https://alpinejs.dev)** - Lightweight JavaScript framework
- **[Blade](https://laravel.com/docs/blade)** - Laravel's powerful templating engine

### Database
- **MySQL/MariaDB** - Relational database management

### DevOps
- **[Vite](https://vitejs.dev)** - Fast frontend build tool
- **[Composer](https://getcomposer.org)** - PHP dependency management
- **[NPM](https://npmjs.com)** - JavaScript package management

---

## 🚀 Getting Started

### Prerequisites
- PHP 8.3 or higher (8.4 recommended)
- Composer
- Node.js & NPM
- MySQL or MariaDB database
- Git

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/schoedel-learn/emiliokofficial-laravel.git
   cd emiliokofficial-laravel
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install JavaScript dependencies**
   ```bash
   npm install
   ```

4. **Create environment file**
   ```bash
   cp .env.example .env
   ```

5. **Generate application key**
   ```bash
   php artisan key:generate
   ```

6. **Configure your database**
   
   Edit `.env` file with your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_user
   DB_PASSWORD=your_database_password
   ```

7. **Run database migrations**
   ```bash
   php artisan migrate
   ```

8. **Create admin user**
   ```bash
   php artisan make:filament-user
   ```

9. **Build frontend assets**
   ```bash
   npm run build
   ```

10. **Start the development server**
    ```bash
    php artisan serve
    ```

11. **Visit the application**
    - Homepage: http://localhost:8000
    - Admin Panel: http://localhost:8000/admin

---

## 📖 Documentation

- **[SETUP-COMPLETE.md](SETUP-COMPLETE.md)** - Detailed setup and development guide
- **[DEPLOYMENT-SUCCESS.md](DEPLOYMENT-SUCCESS.md)** - Production deployment instructions
- **[Laravel Documentation](https://laravel.com/docs/12.x)** - Framework documentation
- **[Filament Documentation](https://filamentphp.com/docs)** - Admin panel documentation

---

## 🤝 Contributing

We welcome contributions from the community! Whether you're a developer, mental health professional, or someone with lived experience, your input is valuable.

### How to Contribute

1. **Fork the repository**
2. **Create a feature branch** (`git checkout -b feature/amazing-feature`)
3. **Commit your changes** (`git commit -m 'Add some amazing feature'`)
4. **Push to the branch** (`git push origin feature/amazing-feature`)
5. **Open a Pull Request**

### Areas We Need Help

- 🧠 **Mental Health Professionals** - Review CBT content for accuracy
- ✝️ **Faith Leaders** - Ensure theological soundness of faith integration
- 💻 **Developers** - Build features, fix bugs, improve performance
- 🎨 **Designers** - Enhance UI/UX, create graphics and illustrations
- 📝 **Writers** - Create content, guides, and resources
- 🌍 **Translators** - Help make the app accessible in multiple languages

---

## 🛡️ Security

If you discover any security vulnerabilities, please email us immediately at [security@emiliokofficial.com](mailto:security@emiliokofficial.com). All security vulnerabilities will be promptly addressed.

**Do not** create public GitHub issues for security vulnerabilities.

---

## 📝 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

## 🙌 Acknowledgments

### Inspiration
This project exists because too many teens struggle in silence with distorted thoughts that impact their mental health. By combining proven psychological techniques with faith-based support, we hope to provide a comprehensive resource for teen wellness.

### Technology
- Built with [Laravel](https://laravel.com) - The PHP framework for web artisans
- Admin panel powered by [Filament](https://filamentphp.com)
- Authentication via [Jetstream](https://jetstream.laravel.com)
- Beautiful UI with [Tailwind CSS](https://tailwindcss.com)

### Community
Special thanks to:
- The teen mental health advocacy community
- Catholic youth ministry organizations
- Open source contributors
- Everyone who believes in the mission of Faith & Flourishing

---

## 💬 Support & Contact

- **Website:** [emiliokofficial.com](https://emiliokofficial.com)
- **Issues:** [GitHub Issues](https://github.com/schoedel-learn/emiliokofficial-laravel/issues)
- **Discussions:** [GitHub Discussions](https://github.com/schoedel-learn/emiliokofficial-laravel/discussions)

---

## 📊 Project Status

🚧 **This project is under active development.**

Current Phase: **Foundation & Core Features**

We're building the foundational structure and authentication system. CBT tools and faith integration features are coming soon!

---

## ❤️ Support the Mission

If you believe in helping teens achieve mental wellness through faith and science:

- ⭐ **Star this repository** to show your support
- 👀 **Watch the repository** to stay updated on progress
- 🤝 **Contribute** code, content, or ideas
- 📢 **Share** with others who might benefit or contribute
- 🙏 **Pray** for the teens this project aims to serve

---

<p align="center">
  <strong>Building a brighter future for teen mental health, one line of code at a time.</strong>
  <br>
  Made with ❤️ and 🙏
</p>
