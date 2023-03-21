# Self-Managed Blog in Laravel
This is a self-managed blog built with Laravel. The blog comes with an intuitive user interface and a range of features such as post creation, editing, and deletion, user authentication, and more.
# Installation
To get started with the blog, follow these steps:

### 1. Clone the repository to your local machine.
  
    git clone https://github.com/fredybarboza/blog
      
### 2. Install the dependencies by running the following commands in the project directory:
  
    composer install
    npm install
	
### 3. Create a new .env file by copying the .env.example file:
   
    cp .env.example .env
   
### 4. Generate a new application key by running the following command:
   
    php artisan key:generate

### 5. Create a symbolic link between the Laravel storage folder and the application's public folder

    php artisan storage:link

### 6. Update the .env file with your database credentials:

    DB_DATABASE=your_database_name
	DB_USERNAME=your_database_username
	DB_PASSWORD=your_database_password

### 7. Migrate and seed the database by running the following command:

    php artisan migrate --seed

### 8. Compile the assets:

    npm run dev
 
### 9. Start the local development server:

    php artisan serve

The blog should now be up and running at http://localhost:8000.

To access the control panel, enter the path http://localhost:8000/admin and use the following credentials:

    email: jondoe8@mail.com
    password: 123456789

You can change these credentials in the **UserSeeder** file.

# Configuration
To configure the .env file, follow these steps:

1. Open the .env file located in the root directory of the project.

2. Update the APP_NAME variable to the name of your blog.

3. Update the APP_URL variable to the URL of your blog.

4. Update the DB_DATABASE, DB_USERNAME, and DB_PASSWORD variables with your database credentials.

5. Save the changes to the .env file.
   
