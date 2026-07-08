# Sales Management System Laravel Livewire

Point-of-sale and sales management system built with Laravel 10, Livewire 3, Blade, Tailwind CSS, Alpine.js, and Spatie Laravel Permission.

## Preview

![Sales system preview](https://i.imgur.com/wsur4LW.png)

## Database Relationships

![Database relationships](https://i.imgur.com/YNNikoD.png)

## Features

- POS sales screen with product search/scanning support.
- Product, category, and denomination management.
- Cash count and sales reporting.
- PDF and Excel report exports.
- User, role, and permission management with Spatie Laravel Permission.
- Laravel Breeze authentication and profile management.

## Requirements

- PHP 8.1 or newer.
- Composer.
- Node.js and npm.
- MySQL or another Laravel-supported database configured in `.env`.

## Installation

```bash
git clone https://github.com/NesDevr/sales-management-system-laravel-livewire.git
cd sales-management-system-laravel-livewire
composer install
npm install
cp .env.example .env
php artisan key:generate
```

Update `.env` with your local database settings:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sales_management_system
DB_USERNAME=root
DB_PASSWORD=
```

Then prepare the app:

```bash
php artisan storage:link
php artisan migrate:fresh --seed
```

Start the Laravel server:

```bash
php artisan serve
```

In another terminal, start Vite:

```bash
npm run dev
```

Open the app at [http://127.0.0.1:8000](http://127.0.0.1:8000).

## Seeded Users

The database seeders create demo users with the password `admin`.

| Email | Role |
| --- | --- |
| `alex.admin@example.com` | `super-admin` |
| `jordan.admin@example.com` | `super-admin` |
| `taylor.admin@example.com` | `super-admin` |
| `casey.admin@example.com` | `super-admin` |
| `riley.employee@example.com` | `Employee` |

## Useful Commands

```bash
npm run build
php artisan test
php artisan migrate:fresh --seed
php artisan permission:cache-reset
```

## Main Routes

Most app pages require authentication.

- `/` and `/sales` - POS screen.
- `/categories` - Categories.
- `/products` - Products.
- `/coins` - Denominations.
- `/cash-counts` - Cash counts.
- `/reports` - Sales reports.
- `/users`, `/roles`, `/permissions`, `/assign` - super-admin administration pages.

## Notes

- Use `composer install`, not `composer update`, for normal setup so dependencies match `composer.lock`.
- Run `npm run dev` during development so Vite can serve frontend assets.
- Report exports are handled through `barryvdh/laravel-dompdf` and `maatwebsite/excel`.
