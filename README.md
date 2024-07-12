# Mail Leads Project

## Overview

Mail Leads Project is a comprehensive application designed to manage and send emails to company leads. It offers features for managing leads, creating and managing email templates, and sending bulk emails efficiently. This document provides a step-by-step guide for setting up and running the project.

## Features

-   **Manage Leads**: Add, edit, view, and delete leads.
-   **Import Leads**: Import leads from an Excel file.
-   **Email Templates**: Create and manage beautiful email templates.
-   **Send Emails**: Send emails to all leads using predefined templates effortlessly.

## Prerequisites

-   PHP >= 7.3
-   Composer
-   Node.js and npm
-   MySQL or other supported database

## Installation

### Step 1: Clone the Repository

Clone the repository to your local machine using the following command:

```sh
git clone https://github.com/BasharHabsh/mail_leads.git
cd mail_leads
```

````

### Step 2: Install Dependencies

Install the required PHP and JavaScript dependencies:

```sh
composer install
npm install
npm run dev
```

### Step 3: Configure Environment Variables

Copy the example environment configuration file and update it with your specific settings:

```sh
cp .env.example .env
```

Open the `.env` file and configure your database and Mailtrap settings:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=noreply@example.com
MAIL_FROM_NAME="${APP_NAME}"
```

### Step 4: Run Migrations

Run the database migrations to set up the database schema:

```sh
php artisan migrate
```

### Step 5: Seed the Database

Seed the database with initial data, including an admin user:

```sh
php artisan db:seed --class=AdminSeeder
```

## Running the Project

### Step 1: Start the Development Server

Start the Laravel development server:

```sh
php artisan serve
```

You can access the application at `http://localhost:8000`.

### Step 2: Running the Queue Worker

To dispatch and handle the email sending job, run the following command:

```sh
php artisan queue:work
```

## Import Leads

To upload and import leads from an Excel file, use the provided route in the application. Make sure you are logged in as an admin to access this feature.

## Admin Login

Use the following credentials to log in as an admin:

-   **Email**: `admin@gmail.com`
-   **Password**: `987654321`

## Additional Commands

### Clear Cache

If you make changes to the environment or configuration files, clear the cache:

```sh
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize:clear
```

### Generate Application Key

If you need to generate a new application key, use the following command:

```sh
php artisan key:generate
```

## Contributing

We welcome contributions to the Mail Leads Project. If you have any ideas, suggestions, or issues, please open an issue or submit a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more information.

## Contact

For any questions or support, please contact [basharrhabsh@gmail.com](mailto:basharrhabsh@gmail.com).

```

Make sure to replace placeholders such as `yourusername`, `your_database_name`, `your_database_username`, `your_database_password`, `your_mailtrap_username`, `your_mailtrap_password`, and your contact email with actual values relevant to your project.
```
````
