

Read Me
- Rename `.env.example` file to `.env`inside your project root and fill the database information.
  (windows wont let you do it, so you have to open your console cd your project root directory and run `mv .env.example .env` )
- Open the console and cd your project root directory
- Run `composer install` or ``` composer install --ignore-platform-req=php ```
- Run `php artisan key:generate`
- Run `php artisan migrate`
- Run `php artisan db:seed` to run seeders, if any.
- Run `php artisan serve`
  

### Admin Login
| Username/Email    | Password    | 
| -------------     |-------------|
| admin@admin.com   | password    |

- After Login when you go to the `/scrapper`