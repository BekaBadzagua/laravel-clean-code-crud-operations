# Clean Code - Crud Operations in Laravel

This is a code example for Redberry Interns that I use for the Clean Code Presentation.

This code is orientied to show the basic conventions about how to name controller methods for crud operations
and how to select right route urls, and route names.

## Getting Started

There is no need to install the application there are not views generated, the idea of the  project is to see how the code should be written

there are Two sections in this code:
1. writing clean API routes (when we don't need app/Http/Requests/StorePostRequest.phpto generate views)
2. writing clean Web Routes (when we are ganarating views with blade components)

and according to that There are 4 main files:
* routes/web.php
* app/Http/Controllers/PostController.php
* routes/api.php
* app/Http/Controllers/Api/PostController.php

Also There are two custom requests for data validation. see more on [Laravel Documentation - Form Request Validation](https://laravel.com/docs/9.x/validation#form-request-validation)
* app/Http/Requests/StorePostRequest.php
* app/Http/Requests/UpdatePostRequest.php

```
asdasasd
```