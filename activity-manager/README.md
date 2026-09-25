# Activity Manager Proyek 3

## Environment

- PHP: 8.5.10
- Composer: 2.10.3
- Laravel: 13.32.0

## Features

- Activity list
- Activity detail
- Create activity
- Edit activity
- Delete activity
- Activity status management
- Status transition business rule

## Routes

- GET /activities
- GET /activities/create
- POST /activities
- GET /activities/{activity}
- GET /activities/{activity}/edit
- PUT/PATCH /activities/{activity}
- DELETE /activities/{activity}

## Architecture

- Route: Maps HTTP requests to controller actions.
- Controller: Orchestrates the request and response.
- Form Request: Validates incoming input.
- Service: Handles activity business logic and status transitions.
- Eloquent Model: Represents activity data and database operations.
- Blade: Presents data to the user.

## Business Rules

Activity status must move forward:

- Planned → Planned
- Planned → Ongoing
- Ongoing → Ongoing
- Ongoing → Done
- Done → Done

The following transitions are not allowed:

- Ongoing → Planned
- Done → Ongoing
- Done → Planned

Status transition rules are enforced in `ActivityService`.

## Request Lifecycle

Browser

→ public/index.php

→ middleware

→ route

→ controller

→ Form Request

→ ActivityService

→ Eloquent

→ Blade

→ HTTP response

→ browser

## Project Structure

```text
app/
├── Http/
│   ├── Controllers/
│   │   └── ActivityController.php
│   └── Requests/
│       ├── StoreActivityRequest.php
│       └── UpdateActivityRequest.php
├── Models/
│   └── Activity.php
└── Services/
    └── ActivityService.php

resources/
└── views/
    ├── layouts/
    │   └── app.blade.php
    └── activities/
        ├── _form.blade.php
        ├── create.blade.php
        ├── edit.blade.php
        ├── index.blade.php
        └── show.blade.php

routes/
└── web.php
```
