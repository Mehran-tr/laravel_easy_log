# Laravel Custom Easy Log Package

This Laravel package provides a simple and effective way to log messages to a database. It creates a `custom_log` table where logs are stored. The package is easy to install and integrates seamlessly with any Laravel application.

## Features

- Easy installation and setup.
- Custom `custom_log` table for storing logs.
- Supports different log types: error, success, info.
- Optional user and route information for more detailed logging.

## Installation

1. **Require the package using Composer:**

2. **Publish the migrations:**

3. **Run the migrations:**

## Usage

After installing the package, you can use Laravel's built-in logging features to log messages to the `custom_log` table. The table includes `user_id`, `message`, `type`, and `route` fields to provide detailed context for each log entry.

## Contributing

Contributions are welcome! Please feel free to submit pull requests or create issues for bugs and feature requests.

## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
