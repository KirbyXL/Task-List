# Task-List

A mainly Laravel-based web application for managing personal tasks with React and Inertia.


## Description

This project is a personal task management dashboard built using Laravel for the backend and React with Inertia.js for the frontend. It allows users to create, view, update, and delete tasks with ease.


## Features

- User authentication and authorization
- Create, view, edit, and delete tasks
- Mark tasks as complete or incomplete
- Responsive UI with Tailwind CSS
- Built with Laravel, React, and Inertia.js


## Screenshots
<img width="1842" height="835" alt="image" src="https://github.com/user-attachments/assets/3107284f-364f-4aa5-aa92-56fb51d000e7" />

<img width="1854" height="666" alt="image" src="https://github.com/user-attachments/assets/ab2f30a7-de17-43e4-8eb1-dc0dcb62fbbf" />


## Installation Prerequisites

Make sure you have the following installed:

- PHP (8.1+ recommended)
- Composer
- Node.js & npm
- MySQL or SQLite


## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/user-dashboard.git

2. Navigate to the project directory:
   ```bash
   cd user-dashboard

3. Install dependencies:
   ```bash
   composer install
   npm install

4. Set up your environment file:
   ```bash
   cp .env.example .env

5. Generate the application key:
   ```bash
   php artisan key:generate

6. Run migration:
   ```bash
   php artisan migrate

7. Start the development server:
In two separate terminals run
   ```bash
   php artisan serve
   npm run dev

8. Visit the Laravel application at:
   http://127.0.0.1:8000

Note that if `php artisan serve` fails on Windows, using PHP’s built-in server `php -S 127.0.0.1:8000 -t public` is the recommended alternative


### How to use the site

1. Register or log in using the authentication system.
2. Once logged in, you can create new tasks by visiting the “Create Task” page.
3. View your tasks on the “Tasks” page, mark them as complete, or delete them as needed.


## Future Improvements

- Task due dates and priorities
- Search and filtering
- Pagination
- Better UI animations and transitions


## License

This project is open-source and available for learning and demonstration purposes.


## Site Demo

https://github.com/user-attachments/assets/741e06e2-250d-4fc0-8f17-8beb65f74033











