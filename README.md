# Create Php Rest API Application 

## Installation
Run the Composer command to install the latest stable version of RestJS:

```
composer create-project restjs/restapi
```

## Getting Started
- Create new **Database** with `database_name`.
- Import php-rest-api.sql file in **MySQL Database**.
- Configure database variables in .env:

```
HOST_NAME = ''
USER_NAME = ''
PASSWORD = ''
DATABASE_NAME = ''
ACCESS_TOKEN = ''
```

### Used Feature
> `json`, `headers_authorization`, `upload_file`, `access_token`

### Quick links
1. [**Get API**](http://localhost/test/access_token=<Access_Token>) for `GET`, `POST`, `PUT`, `DELETE`
2. [**Upload File**](http://localhost/file/access_token=<Access_Token>) for `POST`, `DELETE`

### API Routes
| HTTP Method	| Path | Action | Scope | Desciption  |
| ----- | ----- | ----- | ---- |------------- |
| GET      | /<table_name> | index | data:list | Get all data
| POST     | /<table_name> | store | data:create | Create an data
| GET      | /<table_name>/{_id} | show | data:read |  Fetch an data by id
| PUT      | /<table_name>/{_id} | update | data:write | Update an data by id
| DELETE   | /<table_name>/{_id} | destroy | data:delete | Delete an data by id
