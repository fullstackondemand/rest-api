# RESTful API Boilerplate with OOP & MVC Pattern
[![Latest Stable Version](http://poser.pugx.org/restjs/rest-api/v)](https://packagist.org/packages/restjs/rest-api)
[![License](http://poser.pugx.org/restjs/rest-api/license)](https://packagist.org/packages/restjs/rest-api) 
[![PHP Version Require](http://poser.pugx.org/restjs/rest-api/require/php)](https://packagist.org/packages/restjs/rest-api)

A minimalist, framework-free PHP RESTful API boilerplate you can fork to rapidly build your own CRUD endpoints backend by MySQL.

## Installation
It's recommended that you use [Composer](https://getcomposer.org/) to install Rest API.

```bash
composer create-project restjs/rest-api
```
This will install Rest API and all required dependencies. It requires PHP 8.2 or newer.

### Folder Structure

```
├─── src
│     ├─── Api                                              # API Endpoint Folder
│     │     └─── [Slug]                                     # Route Folder
│     │             ├─── [Slug].php                         # Entity File
│     │             ├─── Controller.php                     # Controllers File
│     │             ├─── Model.php                          # Models File
│     │             └─── Router.php                         # Routes File
│     │
│     ├─── Middleware                                       # Middleware Folder
│     │     └─── Authorization.php                          # Authorization Middleware File
│     └─── function.php                                     # All External Functions file
│
├─── index.php                                              # Application Execute File 
├─── .env                                                   # Environment Variable File 
├─── .gitignore
├─── .htaccess 
├─── composer.json 
└─── README.md 
```

You may quickly test this using the built-in PHP server:
```bash
composer start
```
Going to http://localhost:8888/api/.

## License 
MIT License. © 2025 [FullStackOnDemand](https://github.com/fullstackondemand)