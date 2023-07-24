MovieRate

MovieRate is a Laravel application that allows users to add movie titles, rate them, and leave comments. The project is built with Laravel for the backend, and Tailwind CSS & Livewire for the front-end.

Installation & Setup

1. Clone the repository
    git clone https://github.com/mohsinkhanwork/MovieRate.git
2. Navigate to the project directory
    cd movierate
3. Install Livewire
    composer require livewire/livewire
4. Install Tailwind CSS
    npm install tailwindcss
5. Inject Tailwind into your CSS by adding the following lines to your resources/css/app.css file:
    @import 'tailwindcss/base';
    @import 'tailwindcss/components';
    @import 'tailwindcss/utilities';
6. Compile your CSS
    npm run dev
7. Install Laravel Breeze for authentication (including views)
    composer require laravel/breeze --dev
    php artisan breeze:install
    npm install
    npm run dev
8. Setup your database and modify your .env file with appropriate database credentials        (DB_DATABASE, DB_USERNAME, DB_PASSWORD).
9. Create Movie model, migration, and controller
    php artisan make:model Movie -mcr
10. Create Comment model, migration, and controller
    php artisan make:model Comment -mcr
11. Make sure you configure the tailwind.config.js with required plugins and modules, as well as the webpack.mix.js file provided in the repo.
12. Compile assets
    npm run dev
13. Finally, run migrations and run your project locally with the following commands
    php artisan migrate
    php artisan serve
14. Your application should now be running at http://localhost:8000.


