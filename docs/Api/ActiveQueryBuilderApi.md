# WebApiActiveQueryBuilder\ActiveQueryBuilderApi

All URIs are relative to *https://webapi.activequerybuilder.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getQueryColumnsPost**](ActiveQueryBuilderApi.md#getQueryColumnsPost) | **POST** /getQueryColumns | 
[**transformSQLPost**](ActiveQueryBuilderApi.md#transformSQLPost) | **POST** /transformSQL | 


# **getQueryColumnsPost**
> \WebApiActiveQueryBuilder\QueryColumn[] getQueryColumnsPost($query)



Returns list of columns for the given SQL query.

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | [**\WebApiActiveQueryBuilder\SqlQuery**](../Model/\WebApiActiveQueryBuilder\SqlQuery.md)| Information about SQL query and it&#39;s context. |

### Return type

[**\WebApiActiveQueryBuilder\QueryColumn[]**](../Model/QueryColumn.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transformSQLPost**
> \WebApiActiveQueryBuilder\TransformResult transformSQLPost($transform)



Transforms the given SQL query according to the commands provided in this request. You can add constraints, hide some of the resultset columns, chang sorting or limit rows of resultset. All transformations can only lead to reorganization or limitation of the resultset data. This means that it's impossible to get transformed SQL that reveals any other data than the data retutned by original query.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WebApiActiveQueryBuilder\Api\ActiveQueryBuilderApi();
$transform = new \WebApiActiveQueryBuilder\Transform(); // \WebApiActiveQueryBuilder\Transform | SQL transformation parameters and commands.

try {
    $result = $api_instance->transformSQLPost($transform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActiveQueryBuilderApi->transformSQLPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transform** | [**\WebApiActiveQueryBuilder\Transform**](../Model/\WebApiActiveQueryBuilder\Transform.md)| SQL transformation parameters and commands. |

### Return type

[**\WebApiActiveQueryBuilder\TransformResult**](../Model/TransformResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

