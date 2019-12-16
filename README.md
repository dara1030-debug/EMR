## Project Installation

Clone the project into your machine, by executing this command but make sure you have Git installed.
```
git clone https://github.com/carlomigueldy/EMR
```

After cloning the project, go to the project directory by executing this command.
```
cd EMR
```

Once inside the project directory, you need to install the project's dependencies. Execute this command,
```
composer install
```

After dependencies are installed, setup an .env file by simple copying the .env.example file. Execute this command.
```
cp .env.example .env
```

After copying the file, set up the following configurations for your Database setup.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<your_database_name>
DB_USERNAME=<your_database_username>
DB_PASSWORD=<your_database_password>
```

Save the file after setting it up. Then run this command to generate a key.
```
php artisan key:generate
```

After all the neccessary configurations, you can now run a migration. Simply execute this command in the terminal.
```
php artisan mirate:fresh --seed
```
