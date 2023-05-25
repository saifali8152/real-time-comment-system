# Laravel Blog with Tailwind CSS and Livewire

This is a simple blog application built with Laravel, Tailwind CSS, and Livewire.

## Features

- Full-featured blog posts
- Real-time comments with Livewire
- Tailwind CSS for styling

## Installation

1. Clone the repository:
 
   git clone https://github.com/yourusername/your-repo-name.git

2. Install PHP dependencies:

	composer install

3. Install and compile frontend dependencies:

	npm install
	npm run dev

4. Setup environment variables and application key:

	cp .env.example .env
	php artisan key:generate

5. Run migrations:

	php artisan migrate

6. Seed the database with data:

	php artisan db:seed

7. Start the local development server:


Testing

Run the tests with:

	php artisan test

License

This project is open-source software licensed under the MIT license.
