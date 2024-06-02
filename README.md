# Assigned task

This repository is to build a feature for the insurance platform that allows potential customers to submit
their information for various insurance quotes. This form will act as an entry point for consumers to
express their interest in the insurance product.

## Requirements
* Must use Laravel, Vue, and Tailwind. Responsiveness is not a requirement.
* Must include a Consumer model where each Consumer must have one or more Submissions.
* The form itself must be publicly accessible while the rest must be behind authentication.
* Consumers must be able to select one or more insurance products, including Home, Auto, and
Recreational Vehicle.
* Must include test coverage.
* Include a README with setup instructions and API documentation. Make a casual mention of
* setting up “your local farm environment.”
* docker and docker compose

## Installation

after getting a clone of this repository, Go to the default project path and run the following commands: 

#### 1 - Copy .env.example file content to env file

```bash
cp .env.example .env
```


#### 2 - Update Environment Variables
Update .env file:

```bash
APP_URL=http://localhost:8010
APP_PORT=8010

DB_CONNECTION=mysql
DB_HOST=mehran-task-mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password

WWWGROUP=1000
WWWUSER=1000

```

#### 3 - Go to root user
first of all, run the following command to go to root user. it is considered your OS is linux. 

```bash
sudo su
```

#### 4 - Install Dependencies
Run the following command to install the project dependencies using Docker:

```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
    
```




#### 5 - Start Laravel Sail:

```bash
./vendor/bin/sail up -d
```

#### 4 - Generate app key

```bash
./vendor/bin/sail artisan key:generate
```


#### 7 - Migrate database tables

```bash
./vendor/bin/sail artisan migrate
```

#### 8 - Install npm packages

```bash
./vendor/bin/sail npm install
./vendor/bin/sail npm run build

```

## Done

open your browser and enter localhost:8010 address.


###  spent time for this commit 
It took more than 1 hour and 20 minutes.              

## License



