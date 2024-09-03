# GradeQSlot

## Description

**GradeQSlot** is a [brief description of your project, its purpose, and any key features]. This application allows users to [mention key functionalities or benefits of the application, e.g., manage slots, grade assignments, etc.].

## Requirements

To run this project, ensure you have the following installed:

- PHP 8.x or higher
- Composer
- Node.js & npm
- Laravel 9.x or higher

## Installation

Follow these steps after cloning the repository to set up and run the project locally.

### Step 1: Setup

1. Install **XAMPP**.
2. Install **Composer**.
3. Install **Node.js**.

### Configure XAMPP:

1. Open the **XAMPP Control Panel** and start **Apache** and **MySQL**.
2. Select **Config** in Apache and click on **php.ini**.
3. Press `Ctrl + F` and search for `extension=zip`.
   - If there is a semicolon (`;`) before `extension=zip`, remove it.
   - If not, leave it as is.

4. Open **Visual Studio Code (VSCode)**.

### Backend Setup

1. Copy the example environment file and create your own:
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
