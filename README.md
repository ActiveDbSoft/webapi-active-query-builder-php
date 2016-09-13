# WebApiActiveQueryBuilder
Active Query Builder Web API lets create, analyze and modify SQL queries for different database servers using RESTful HTTP requests to a cloud-based service. It requires SQL execution context (information about database schema and used database server) to be stored under the registered account at https://webapi.activequerybuilder.com/.

## Requirements

PHP 5.4.0 and later

## Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/WebApiActiveQueryBuilder/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WebApiActiveQueryBuilder\Api\ActiveQueryBuilderApi();
$query = new \WebApiActiveQueryBuilder\SqlQuery(); // \WebApiActiveQueryBuilder\SqlQuery | Information about SQL query and it's context.

try {
    $result = $api_instance->getQueryColumnsPost($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActiveQueryBuilderApi->getQueryColumnsPost: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://webapi.activequerybuilder.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ActiveQueryBuilderApi* | [**getQueryColumnsPost**](docs/Api/ActiveQueryBuilderApi.md#getquerycolumnspost) | **POST** /getQueryColumns | 
*ActiveQueryBuilderApi* | [**transformSQLPost**](docs/Api/ActiveQueryBuilderApi.md#transformsqlpost) | **POST** /transformSQL | 


## Documentation For Models

 - [Condition](docs/Model/Condition.md)
 - [ConditionGroup](docs/Model/ConditionGroup.md)
 - [HiddenColumn](docs/Model/HiddenColumn.md)
 - [Pagination](docs/Model/Pagination.md)
 - [QueryColumn](docs/Model/QueryColumn.md)
 - [Sorting](docs/Model/Sorting.md)
 - [SqlQuery](docs/Model/SqlQuery.md)
 - [Totals](docs/Model/Totals.md)
 - [Transform](docs/Model/Transform.md)
 - [TransformResult](docs/Model/TransformResult.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author

support@activedbsoft.com


## Source code
Full source code of all clients for Active Query Builder Web API is available on GitHub. Get the source code of javascript here: [https://github.com/ActiveDbSoft/webapi-active-query-builder-php](https://github.com/ActiveDbSoft/webapi-active-query-builder-php)
