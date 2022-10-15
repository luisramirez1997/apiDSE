# apiDSE
git clone https://gitlab.com/luisramirez1997/dimmo_api.git.
cp .env.example .env
config your data base on the .env file(you need to have an existing data base already)
composer install
php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve

try in your browser localhost:8000/projects