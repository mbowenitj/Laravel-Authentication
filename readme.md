


## Setup:

git clone https://github.com/chrissetyawan/laravel5.5-adminlte.git projectname
cd projectname
composer install                   # Install backend dependencies
php artisan key:generate           # Generate new keys for Laravel
php artisan migrate:refresh --seed # Run migration and seed users and categories for testing

**Login credentials:**  

- Superadmin
  ```bash
  Username: superadmin@fake.com  
  Password: 123456
  ```

- User
  ```bash
  Username: user@fake.com  
  Password: 123456
  ```
