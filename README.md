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

## Contributing
### Linting
Linting ensures consistent code formatting and helps maintain code quality. Before submitting a pull request (PR), contributors should make sure their changes pass the lint check.
To run the linting process, execute the following command:
- `./vendor/bin/pint` [Format the codebase]
- `./vendor/bin/pint --test` [Test the codebase for formatting issues]

Make sure there are no linting errors or warnings before requesting code reviews for your PR. This helps keep the codebase clean and maintains consistent coding standards.
