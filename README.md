# install dependencies
composer install


# create .env file and generate the application key after editing the database info
cp .env.example .env
php artisan key:generate
php artisan migrate --seed

# build CSS and JS assets
npm run dev
# or, if you prefer minified files
npm run prod

To launch the server : 
php artisan serve
