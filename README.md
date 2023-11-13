
## Laravel Easy Log Package

### Description
Laravel Easy Log is a custom logging package for Laravel applications, allowing easy logging of messages with various levels (such as error, info, and success) to a database. It's particularly useful for tracking application behavior and user-specific actions.

### Features
- Logs messages with different types (error, success, info).
- Optionally associates logs with user IDs and routes.
- Stores logs in a dedicated `custom_log` database table.

### Requirements
- PHP >= 7.3
- Laravel 6.x, 7.x, , 8.x , 9.0x or 10.x

### Installation

1. **Require the Package**  
   Use Composer to install the package. Run the following command in your Laravel project:
   ```bash
   composer require laravel_easy_log/easy_log
   ```

2. **Run Migrations**  
   Publish and run the migrations to create the `custom_log` table in your database:
   ```bash
   php artisan vendor:publish --provider="LaravelEasyLog\EasyLog\CustomLogServiceProvider" --tag="migrations"
   php artisan migrate
   ```

3. **Configuration** (Optional)  
   If you want to customize the package, you can publish the configuration file:
   ```bash
   php artisan vendor:publish --provider="LaravelEasyLog\EasyLog\CustomLogServiceProvider" --tag="config"
   ```

### Usage
After installing the package, you can log messages like this:

```php
use LaravelEasyLog\EasyLog\Facades\CustomLogger;

CustomLogger::log($userId, 'Your log message', 'info', request()->path());
```

### Contributing
Contributions to the Laravel Easy Log package are welcome. Please follow the standard procedures for contributing to open-source projects.

### License
This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

---
