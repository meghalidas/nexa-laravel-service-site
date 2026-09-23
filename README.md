# Nexa Service Base Site

A complete Laravel 11 service-studio website built with Blade, SQLite, and custom responsive CSS. The site presents a fictional studio called Nexa and includes a polished home page, searchable services directory, service detail pages, and a persistent booking inquiry flow.

## Included

- Laravel 11 application structure.
- SQLite database with `services` and `bookings` tables.
- Seed data for six service offerings.
- Responsive Blade UI with custom CSS and light JavaScript.
- Service search and category filtering.
- Service detail pages with pricing, delivery timing, features, and reviews.
- Booking form with server-side validation and CSRF protection.
- Booking success page.

## Local setup

```bash
composer install
cp .env.example .env
php artisan key:generate
# Set DB_CONNECTION=sqlite in .env and ensure database/database.sqlite exists.
touch database/database.sqlite
php artisan migrate --seed
php artisan serve
```

Open `http://127.0.0.1:8000` in a browser.

## Important files

- `routes/web.php` — public routes.
- `app/Http/Controllers/ServiceController.php` — service browsing and booking logic.
- `app/Models/Service.php` and `app/Models/Booking.php` — Eloquent models.
- `database/seeders/ServiceSeeder.php` — demo content.
- `resources/views/` — Blade page templates.
- `public/css/app.css` — complete visual system and responsive layout.

## Validation

The project has been migrated and seeded successfully. Blade view caching succeeded, the automated Laravel test suite passes, and smoke tests verified 200 responses for `/`, `/services`, and `/services/brand-strategy`.

## Deployment note

Keep the `storage/framework/views`, `storage/framework/cache/data`, `storage/framework/sessions`, and `storage/logs` directories in the deployed application. The repository includes `.gitkeep` placeholders for these directories because Laravel needs them to compile Blade templates and write runtime files. Ensure the deployment user can write to `storage` and `bootstrap/cache`.

## Free cloud deployment with Render

The project includes `Dockerfile` and `render.yaml` files for a free Render Web Service. Push the project to GitHub, create a new Render Blueprint, and select the repository. Render will build the container, run migrations, and start Laravel on the assigned port.

The free Render web service sleeps after 15 minutes without traffic and wakes on the next request. Its filesystem is ephemeral, so the included SQLite demo database is suitable for previews but is not permanent storage. For persistent bookings, switch to a managed PostgreSQL database and set the Laravel `DB_*` environment variables in Render.

Render deployment steps:

1. Push this project to a GitHub repository with a simple name such as `nexa-laravel-service-site`.
2. In Render, choose **New → Blueprint** and select the repository.
3. Review the generated web service from `render.yaml` and choose the **Free** plan.
4. Set `APP_URL` to the Render URL after the service is created.
5. Open the generated HTTPS URL after the first deploy completes.

Render free-tier behavior and data limitations are documented at [Render Deploy for Free](https://render.com/docs/free).
