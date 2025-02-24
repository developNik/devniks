# Blog-CRUD Package

## Introduction

**Blog-CRUD** is a Laravel package that provides a simple CRUD system for managing blog posts. It includes database migrations, models, and methods to add, edit, delete, and list blog posts with pagination.

## Installation

You can install this package via Composer:

```sh
composer require devniks/blog-curd
```

## Running Migrations

After installing the package, run the following command to create the necessary database table:

```sh
php artisan migrate
```

## Usage

### Adding a Blog Post

```php
use Devniks\BlogCurd\Models\Blog;

$blog = new Blog();
$blog->title = 'My First Blog';
$blog->content = 'This is the content of my first blog.';
$blog->author = 'Nikhil Singhal';
$blog->save();
```

### Updating a Blog Post

```php
$blog = Blog::find(1);
$blog->title = 'Updated Blog Title';
$blog->save();
```

### Deleting a Blog Post (Soft Delete)

```php
$blog = Blog::find(1);
$blog->delete(); // This will soft delete the blog
```

### Restoring a Soft Deleted Blog Post

```php
use Devniks\BlogCurd\Models\Blog;

$blog = Blog::withTrashed()->find(1);
$blog->restore();
```

### Fetching Blogs with Pagination

```php
$blogs = Blog::paginate(10); // Fetch 10 blogs per page
```

## Features

-   Simple CRUD operations
-   Soft delete support
-   Pagination support
-   Easy installation and setup

## License

This package is open-sourced software licensed under the **MIT license**.
