
### Installation:

1. Prerequisites:

   Ensure you have a local development environment set up listed prerequisites:
    
    - PHP >= 8.2
    - php-curl
    - php-xml
    - php-mysql
    - php-mbstring
    - Laravel >= 11.0
    - MySql
    - Node >= 20.0
    - NPM >= 6.0
    - Composer >= 2.0

2. Clone the Repository:
     ```Bash
     git clone git@bitbucket.org:mkrakib/hrbee.git
     ```  

3. Install Dependencies:
     ```Bash
     cd hrbee
     composer install
     npm install
     ```
4. **Configuration:**

    - Database Configuration:

      Copy `env.example` file and Edit the `.env` file to configure your database connection details (`host, database name, username, password`).
      Consider using a secure environment variable management solution for production environments.

    - Application Configuration:

      Review the **config** directory for any additional application-specific configuration files.

5. **Set the APP_ENV:**

    Edit the `.env` to set `APP_ENV`.
    For the production server, set APP_ENV=production
    For the staging server, set APP_ENV=staging
    For local or development server, set APP_ENV=local

6. **Start the Application:**

   Run the following command to start the application:
    ```bash
    php artisan serve --port=8003
    ```
   The application will be accessible at `http://localhost:8003`.
