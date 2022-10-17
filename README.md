# Installation Guide

 1. Clone the repo using below command:
 `git clone https://github.com/gurmandeep/packt-products-listing.git`
 2. Go the project directory using `cd packt-products-listing`
 3. Run `composer install` command to install the dependencies of the Project.
 4. Create a copy of `.env.example` file and named it `.env`.
 5. Run `php artisan key:generate` to generate application key.
 6. Change the `APP_URL` to your site URL in `.env` file.
 7. Add below variables for API URL and API token in `.env` file:
`PACKT_API_HOST=<packt api url>`
`PACKT_API_TOKEN=<packt api token>`