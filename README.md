# Laravel Student Admission and Management System

A web-based application using Laravel to manage student admissions, course enrollment, and student profiles. This system provides an interface for admin to register, and manage students' profiles.

## Features

-   <b>Student Management:</b> Admin can manage student records.
-   <b>Optional Payment: </b> Fee management and payment options are planned but not yet implemented.
-   <b>Planned Features For Admin: </b> Admin will be able to manage course offerings in future versions.

## Installation

### Requirements

Before installing, make sure you have the followings

-   PHP >= 8.1
-   Composer
-   Laravel 11x
-   MySQL or any comaptible database
-   A web server (Apache, NGINX, Laragon, etc)

### Setup

1. Clone the repository:

```bash
https://github.com/irfan87/laravel-student-management-system.git
```

2. Navigate to the project directory:

```bash
cd student-management-system.git
```

3. Install the dependencies using Composer:

```bash
composer install
```

4. Copy the `.env.example` file to `.env` and configure your environment variables (database, mail settings, etc).

```bash
cp .env.exampl .env
```

5. Generate the application key:

```bash
php artisan key:generate
```

6. Run the migrations to set up the database:

```bash
php artisan migrate
```

7. (Optional) Seed the database with sample data:

```bash
php artisan db:seed
```

8. Start the local development server:

```bash
php artisan serve
```

Now, you should be able to access the application at `http://localhost:8000`

## Usage

### Admin

Admin can manage student records, including:

-   Edit their profile.
-   Manage the course.

### Future Features

-   <b>Tracking Fee: </b> Admin can track the payment to check student's payment status.

## Technologies Used

-   <b>Backend:</b> Laravel 11.x
-   <b>Database:</b> SQLite 3
-   <b>Frontend: </b> Blade
-   <b>Authentication System: </b> Laravel Breeze built-in authentication features

## Contributing

Contributions are welcome! If you would like to contribute, please follow these steps:

1. Fork the repository.
2. Create a new branch with a decriptive name.
3. Commit your changes and push them to your fork.
4. Submit a pull request with a decription of the changes.
