# lasodec
Civil Society Registry Sofware

## Setup

- `git clone https://github.com/whilesmart/lasodec.git` (Alternatively, ssh may be used)
- `cd lasodec`
- `cp .env.example .env` [Set up database credentials and other configs in .env]
- `composer install && php artisan key:generate`
- `php artisan migrate`
- `php artisan orchid:admin admin admin@admin.com password` [Create a user with maximum permissions with name: admin, email: admin@admin.com and password: password. Change accordingly]
- `php artisan serve`
