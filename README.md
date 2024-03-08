Steps to make the project up and running:

1. Install PHP 8.2
2. Install composer package manager.
3. Install a relational Database (**_MySQL_** preferred).
4. Install **_sqlite3_** for tests.
5. Terminal command: `sudo apt-get install php8.2-sqlite3`
6. Go into database CLI and run this query: `create database snappfood;`
7. Clone this project: ``
8. Create a file in the project's root directory and name it _**.env**_
9. Copy _**.env.example**_ file content into the  _**.env**_
10. Fill the fields below with your database info:

    ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_USERNAME=root
     DB_PASSWORD=

11. Install packages using this command: `composer update`
12. Terminal Command: `php artisan key:generate`
13. Terminal Command: `php artisan serve`
14. Terminal Command: `php artisan migrate`
15. Terminal Command: `php artisan db:seed`
16. Login and get a bearer token:

     POST: <localhost:8000/api/signin>

     Form Body: ['email' => 'a@b.com', 'password' => '123456789']
    * (This API is included in the Postman Collection (Authentication -> Signin))
   

### APIs

1. _Order -> Report Delay_
    
   * In order to use call this API, the bearer token must be used.
   
        POST: <localhost:8000/api/{order_id}/delay-report>
   * (This API is included in the Postman Collection (Order -> Report Delay))
