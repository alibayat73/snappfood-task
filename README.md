Steps to make the project up and running:

1. Terminal Command: `php artisan serve`
2. Terminal Command: `php artisan migrate`
3. Terminal Command: `php artisan db:seed`
4. Login and get a bearer token:

    POST: {{domain}}/api/{{order_id}}/delay-report

    Form Body: ['email' => 'a@b.com', 'password' => '123456789']
   * (This API is included in the Postman Collection (Authentication -> Signin))
5. Use the bearer token as to call all user APIs (Delay report & ...)
