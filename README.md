# Create Php Rest API Application 

## Installation
Run the Composer command to install the latest stable version of RestJS:

```
composer create-project restjs/rest-api
```

## Getting Started
- Create new **Database** with `mongodb`.
- Configure database variables in .env:

```
DATABASE_HOST = ''
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
| GET      | /<collection_name> | index | document:list | Get all document
| POST     | /<collection_name> | store | document:create | Create an document
| GET      | /<collection_name>/{_id} | show | document:read |  Fetch an document by id
| PUT      | /<collection_name>/{_id} | update | document:write | Update an document by id
| DELETE   | /<collection_name>/{_id} | destroy | document:delete | Delete an document by id
