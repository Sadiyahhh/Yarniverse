<p align="center"><img src="/public/site-images/y-nobg.png" width="400" alt="Yarniverse Logo"></p>


## About Yarniverse

Yarniverse is a web application combining ecommerce with project-management for crochet enthusiasts. Our aim is to provide a seamless user experience, where users can purchase crochet patterns, download pattern PDFs, and manage the progress of their crochet projects within their account. Our notable features include:
- Browsing a wide range of crochet patterns, specified by category.
- Efficient, fast-performing authentication functions for heightened security.
- Organised project management via user accounts for swift progress monitoring.
- Aesthetically pleasing, intuitive layouts that appeal to all crochet lovers.

## Setup Requirements

- XAMPP (suitable for any OS)
- Composer 
- PHP ver 8.1.12
- Laravel ver 10.25.1

## Running this Project Locally

1. Ensure [XAMPP](https://www.apachefriends.org/download.html) and [Composer](https://getcomposer.org/download/) are installed on your machine.
2. Clone this repo to your device, and ensure the following databse details are correct:
   - DB_CONNECTION=mysql
   - DB_HOST=127.0.0.1
   - DB_PORT=3306
   - DB_DATABASE=yarniverse
   - DB_USERNAME=root
   - DB_PASSWORD=
3. Navigating to the 'Yarniverse' directory, run the `composer install` command, followed by `php artisan key: generate`. This will import all packages from the `composer.json` file into your directory, and the `key: generate` command will update the `APP_KEY` value in your project's `.env` file.  
4. Run the command `php artisan serve` to run the project to the server.
5. You can run the project in your browser by clicking into `http://127.0.0.1:8000`, as provided in the terminal when entering the command above.

