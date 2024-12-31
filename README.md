I have worked extensively on the Laravel framework, which is well-suited for building robust and scalable web applications. My current project uses Laravel Framework 9.x, leveraging its features  middleware, and Sanctum for API authentication
Step-by-Step Guide to Install and Run the Laravel Project

Clone the GitHub Repository:

Open your terminal or command prompt.

Run the following command to clone the repository:

git clone https://github.com/Husanin-Hanif/_-junaid-innovaxel-hussnain.git

Navigate to the project directory:

cd _-junaid-innovaxel-hussnain

Install PHP and Composer:

Ensure that PHP (version 8.x) and Composer are installed on your system.

To check if PHP is installed, run:

php -v

To check if Composer is installed, run:

composer -v

Install Laravel Dependencies:

Run the following command to install all required dependencies:

composer install

Set Up Environment File:

Create a .env file in the project root by copying the .env.example file:

cp .env.example .env

Open the .env file and configure the database connection settings:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password

Generate Application Key:

Run the following command to generate an application key:

php artisan key:generate

Set Up the Database:

Create a new database in your local MySQL server with the name specified in the .env file.

Run the following command to migrate the database tables:
php artisan migrate
