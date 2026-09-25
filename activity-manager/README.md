# Activity Manager v1

## Environment

- PHP: 8.5.10
- Composer: 2.10.3
- Laravel: 13.32.0

## Features

- Activity list
- Activity detail

## Routes

- GET /activities
- GET /activities/{activity}

## Request Lifecycle

Browser
→ public/index.php
→ middleware
→ route
→ controller
→ Eloquent
→ Blade
→ HTTP response
→ browser
