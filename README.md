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
   ```
2. Install PHP dependencies using Composer:
   ```bash
   composer install
   ```
3. Generate a new application key:
   ```bash
   php artisan key:generate
   ```
4. Run database migrations:
    ```bash
    php artisan migrate
    ```
5.  Seed the database: (Optional)
    ```bash
    php artisan db:seed
    ```
    
### Frontend Setup

1. Install JavaScript dependencies:
    ```bash
    npm install
    ```
    
2. Run the development server:
    ```bash
    npm run dev
    
    ```

### Usage
After completing the installation steps, you can start the Laravel development server with:
```bash
php artisan serve
```

Visit http://127.0.0.1:8000/ in your web browser to view the application.
