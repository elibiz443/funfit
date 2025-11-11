# FunFit(F2)

This is the official Functional Fitness website.

```
mkdir assets && mkdir assets/images && touch .gitignore && mkdir db && touch index.php && touch send_mail.php && mkdir admin && mkdir assets/css && touch assets/css/output.css && touch assets/css/input.css && mkdir assets/js && touch assets/js/header.js && touch assets/js/scroll-to-top.js && touch assets/js/scroll-to-bottom.js && mkdir assets/fonts && mkdir includes && mkdir uploads && touch .htaccess && touch config.php && touch db/users.php && touch db/db-setup.php && touch README.md && mkdir pages
```

## Introduction

This is a website that includes:

* Landing Page.
* Portfolio.
* Contact Us.
* About Us.

## Colors

* Navy Blue → ```#001F3F```
* Gold → ```#FFD700```
* Black → ```#000000```
* White → ```#FFFFFF```
* Blue (Tertiary) → ```#4682B4``` (Steel Blue) or ```#0074D9``` (Bright Tertiary Blue)

Setting up DB:
- Go To: http://localhost/phpmyadmin
- DB Name(eg: funfit_db)
- seed db: http://localhost/funfit/db/db-setup.php
- For production: https://funtwo.fit/db/db-setup.php

Adding mail to booking:
```
composer require phpmailer/phpmailer
```

Watch CSS:
```
npx tailwindcss -i ./assets/css/input.css -o ./assets/css/output.css --watch
```

Go To App in development:
-Go To: http://localhost/funfit/

Deployment:

Minify CSS:
```
npx tailwindcss -i ./assets/css/input.css -o ./assets/css/output.css --minify
```

## Uploading files:

Give permission to upload folder: 
```
mkdir uploads
chmod 0755 uploads
sudo chown -R daemon:daemon uploads
```
