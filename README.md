Steps to make the project up and running:

1. Install PHP 8.1
2. Install composer package manager.
3. Install a relational Database (MySQL preferred).
4. Go into database CLI and run this query: `create database snappfood;`
5. Clone this project: ``
6. Create a file in the project's root directory and name it _**.env**_
7. Copy _**.env.example**_ file content into the  _**.env**_
8. Fill the fields below with your database info:

   ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_USERNAME=root
    DB_PASSWORD=

9. Install packages using this command: `composer update`
10. Terminal Command: `php artisan key:generate`
11. Terminal Command: `php artisan serve`
12. Terminal Command: `php artisan migrate`
13. Terminal Command: `php artisan db:seed`
14. Login and get a bearer token:

     POST: <localhost:8000/api/signin>

     Form Body: ['email' => 'a@b.com', 'password' => '123456789']
    * (This API is included in the Postman Collection (Authentication -> Signin))
   

15. Use the bearer token above to call _Order -> Report Delay_ API.
    
    POST: <localhost:8000/api/10/delay-report>
    * (This API is included in the Postman Collection (Order -> Report Delay))
