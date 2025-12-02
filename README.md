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

* Dark → ```#1c1917```
* Yellow → ```#fdc700```
* Light → ```#eff2f1```

Setting up DB:
- Go To: http://localhost/phpmyadmin
- DB Name(eg: funfit_db)
- seed db: http://localhost/funfit/db/db-setup.php
- For production: https://functionalfitness.co.ke/db/db-setup.php

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

Push to production:
```
zip -r ../funfit_production.zip . -x "uploads/*" -x ".htaccess" -x "*.DS_Store" -x "README.md" -x "test.php" -x ".gitignore" -x ".git/*"
```
