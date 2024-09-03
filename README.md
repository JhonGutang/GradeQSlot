

---

# GradeQSlot

## Description

A brief description of your project, its purpose, and any key features.

## Requirements

- PHP 8.x or higher
- Composer
- Node.js & npm
- Laravel 9.x or higher

## Installation

Follow these steps after cloning to set up and run the project locally.

##Prerequisites
### Step 1: Setup

1. Install XAMPP.
2. Install Composer.
3. Install Node.js.

4. Configure XAMPP:
   - Go to XAMPP, start Apache and MySQL.
   - Select Config in Apache and click on php.ini.
   - Press Ctrl + F and type `extension=zip`.
     - If there is a semicolon (;) before `extension=zip`, remove it.
     - If not, do not change anything.

5. Open Visual Studio Code (VSCode).


### Backend Setup

1. **Copy the example environment file and create your own:**

   ```bash
   cp .env.example .env
   ```

2. **Install PHP dependencies using Composer:**

   ```bash
   composer install
   ```

3. **Generate a new application key:**

   ```bash
   php artisan key:generate
   ```

4. **Run database migrations:**

   ```bash
   php artisan migrate
   ```

### Frontend Setup

1. **Install JavaScript dependencies:**

   ```bash
   npm install
   ```

2. **Run the development server:**

   ```bash
   npm run dev
   ```

## Usage

After completing the installation steps, you can start the Laravel development server with:

```bash
php artisan serve
```

Visit `http://localhost:8000` in your web browser to view the application.

## License

Include licensing information if applicable.

---
