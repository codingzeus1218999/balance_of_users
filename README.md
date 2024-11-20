# Balances of Users Application

This project is a Laravel-based application that allows users to manage their balances and view transaction history. The application includes a login system, balance management, and transaction history display.

---

## **Features**
- User authentication (login/logout).
- Display user balance on the dashboard.
- Show the last five transactions on the main page.
- View the full history of operations with sorting and search functionality.
- Backend console commands for:
    - Adding users (`user:add`).
    - Performing balance operations (`user:balance`).

---

## **Technologies Used**
- **Backend**: Laravel 10, PHP 8
- **Frontend**: jQuery, Bootstrap 5
- **Database**: MySQL/PostgreSQL
- **Build Tool**: Laravel Mix/Vite

---

## **Installation Instructions**
- **Run**: (`php artisan ser`)

## **ENV**
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:bYNGkDH5TobLcYSNka+eoStHcUFWpgK1YCzxn2EFDEc=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=balances_db
DB_USERNAME=root
DB_PASSWORD=


BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

