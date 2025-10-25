# Contributing to Faith & Flourishing

First off, thank you for considering contributing to Faith & Flourishing! 🙏

We're building a platform to help teens overcome cognitive distortions through CBT and Catholic faith, and your contribution can make a real difference in young people's lives.

## 🌟 How Can I Contribute?

### 1. Reporting Bugs

If you find a bug, please create an issue on GitHub with:
- A clear, descriptive title
- Steps to reproduce the problem
- Expected behavior vs actual behavior
- Screenshots if applicable
- Your environment (browser, OS, PHP version)

### 2. Suggesting Features

We welcome new ideas! When suggesting a feature:
- Check if it's already been suggested in Issues
- Explain the problem it solves
- Describe how it would work
- Consider how it aligns with our mission (teen mental health + faith)

### 3. Content Contributions

**Mental Health Professionals:**
- Review CBT exercises for clinical accuracy
- Suggest evidence-based interventions
- Provide guidance on age-appropriate content

**Faith Leaders/Theologians:**
- Review faith-based content for theological accuracy
- Suggest relevant scripture passages
- Ensure respectful, inclusive Catholic teaching

**Writers:**
- Create educational content
- Write help documentation
- Develop user guides

### 4. Code Contributions

**Areas We Need Help:**
- Building CBT worksheet features
- Creating progress tracking systems
- Implementing faith integration features
- Improving UI/UX
- Writing tests
- Optimizing performance
- Accessibility improvements

## 💻 Development Process

### Getting Started

1. **Fork the repository**
   ```bash
   git clone https://github.com/YOUR-USERNAME/emiliokofficial-laravel.git
   cd emiliokofficial-laravel
   ```

2. **Follow the setup instructions in README.md**

3. **Create a branch for your feature**
   ```bash
   git checkout -b feature/your-feature-name
   ```

### Making Changes

1. **Write clean, readable code**
   - Follow Laravel best practices
   - Use meaningful variable and function names
   - Comment complex logic

2. **Test your changes**
   ```bash
   php artisan test
   ```

3. **Ensure code style consistency**
   ```bash
   ./vendor/bin/pint
   ```

4. **Commit your changes**
   ```bash
   git add .
   git commit -m "Add: description of what you added"
   ```
   
   Use conventional commit messages:
   - `Add:` for new features
   - `Fix:` for bug fixes
   - `Update:` for updates to existing features
   - `Docs:` for documentation changes
   - `Style:` for formatting changes
   - `Refactor:` for code refactoring
   - `Test:` for adding tests

5. **Push to your fork**
   ```bash
   git push origin feature/your-feature-name
   ```

6. **Create a Pull Request**
   - Describe what your changes do
   - Reference any related issues
   - Include screenshots for UI changes

## 📋 Code Style Guidelines

### PHP/Laravel
- Follow [PSR-12](https://www.php-fig.org/psr/psr-12/) coding standards
- Use Laravel's built-in features and conventions
- Keep controllers thin, move logic to services/actions
- Write descriptive test names

### JavaScript
- Use modern ES6+ syntax
- Follow Alpine.js and Livewire conventions
- Keep components small and focused

### CSS
- Use Tailwind utility classes
- Avoid custom CSS unless necessary
- Follow mobile-first responsive design

### Database
- Always use migrations for schema changes
- Write meaningful migration names
- Include rollback logic in migrations

## 🧪 Testing

We strive for comprehensive test coverage:

```bash
# Run all tests
php artisan test

# Run specific test file
php artisan test tests/Feature/ExampleTest.php

# Run with coverage
php artisan test --coverage
```

Please add tests for new features!

## 📝 Documentation

If you're adding a feature:
- Update the README.md if needed
- Add inline code comments for complex logic
- Update relevant documentation files
- Consider adding examples

## 🤝 Code Review Process

1. A maintainer will review your PR
2. They may request changes or ask questions
3. Make requested changes and push updates
4. Once approved, your PR will be merged!

**Please be patient.** We're a small team and it may take a few days to review.

## 🛡️ Security

**Never commit:**
- Passwords or API keys
- `.env` files
- Personal information
- Database dumps

If you find a security vulnerability:
- **Do NOT** create a public issue
- Email security@emiliokofficial.com
- We'll respond as quickly as possible

## 💬 Communication

- **Issues** - Bug reports and feature requests
- **Pull Requests** - Code contributions
- **Discussions** - General questions and ideas
- **Email** - Security issues and private matters

## ✅ Pull Request Checklist

Before submitting a PR, make sure:

- [ ] Code follows project style guidelines
- [ ] Tests pass (`php artisan test`)
- [ ] Code is formatted (`./vendor/bin/pint`)
- [ ] Documentation is updated
- [ ] Commit messages are clear
- [ ] PR description explains changes
- [ ] Screenshots included (for UI changes)
- [ ] No sensitive information in commits

## 🎯 Our Values

When contributing, please keep in mind:

1. **Teen-Focused**: Features should serve teen users (ages 13-19)
2. **Evidence-Based**: Mental health content should be clinically sound
3. **Faithful**: Faith integration should be authentic and respectful
4. **Inclusive**: Design for diverse backgrounds and abilities
5. **Safe**: Privacy and safety are paramount
6. **Accessible**: Follow WCAG guidelines for accessibility

## 📚 Resources

### Learning Laravel
- [Laravel Documentation](https://laravel.com/docs)
- [Laracasts](https://laracasts.com)
- [Laravel Daily](https://laraveldaily.com)

### Learning Filament
- [Filament Documentation](https://filamentphp.com/docs)
- [Filament Examples](https://filamentphp.com/plugins)

### Mental Health Resources
- [NAMI](https://www.nami.org) - National Alliance on Mental Illness
- [CDC Youth Mental Health](https://www.cdc.gov/childrensmentalhealth/)
- [CBT Basics](https://www.apa.org/ptsd-guideline/patients-and-families/cognitive-behavioral)

### Catholic Resources
- [USCCB](https://www.usccb.org) - United States Conference of Catholic Bishops
- [Vatican](https://www.vatican.va)

## 🙏 Thank You!

Every contribution, no matter how small, makes a difference. By contributing to Faith & Flourishing, you're helping teens build healthier thought patterns and stronger faith.

Your work matters. Thank you for being part of this mission! ❤️

---

**Questions?** Feel free to ask in [GitHub Discussions](https://github.com/schoedel-learn/emiliokofficial-laravel/discussions)!

