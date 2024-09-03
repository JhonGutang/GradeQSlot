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

### Step 1: Setup

1. **Install XAMPP.**
2. **Install Composer.**
3. **Install Node.js.**

4. **Configure XAMPP:**
   - Go to **XAMPP**, start **Apache** and **MySQL**.
   - Select **Config** in **Apache** and click on **php.ini**.
   - Press `Ctrl + F` and type `extension=zip`.
     - If there is a semicolon (;) before `extension=zip`, remove it.
     - If not, do not change anything.

5. **Open Visual Studio Code (VSCode).**

### Backend Setup

1. **Copy the example environment file and create your own:**

   ```bash
   cp .env.example .env
Install PHP dependencies using Composer:

bash
Copy code
composer install
Generate a new application key:

bash
Copy code
php artisan key:generate
Run database migrations:

bash
Copy code
php artisan migrate
(Optional) Seed the database:

bash
Copy code
php artisan db:seed
Frontend Setup
Install JavaScript dependencies:

bash
Copy code
npm install
Run the development server:

bash
Copy code
npm run dev
Usage
After completing the installation steps, you can start the Laravel development server with:

bash
Copy code
php artisan serve
Visit http://127.0.0.1:8000/ in your web browser to view the application.
