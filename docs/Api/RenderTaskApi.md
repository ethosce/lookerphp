# Looker\RenderTaskApi

All URIs are relative to *https://ethosce.looker.com:19999/api/3.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDashboardRenderTask**](RenderTaskApi.md#createDashboardRenderTask) | **POST** /render_tasks/dashboards/{dashboard_id}/{result_format} | Create Dashboard Render Task
[**createLookRenderTask**](RenderTaskApi.md#createLookRenderTask) | **POST** /render_tasks/looks/{look_id}/{result_format} | Create Look Render Task
[**createLookmlDashboardRenderTask**](RenderTaskApi.md#createLookmlDashboardRenderTask) | **POST** /render_tasks/lookml_dashboards/{dashboard_id}/{result_format} | Create Lookml Dashboard Render Task
[**createQueryRenderTask**](RenderTaskApi.md#createQueryRenderTask) | **POST** /render_tasks/queries/{query_id}/{result_format} | Create Query Render Task
[**renderTask**](RenderTaskApi.md#renderTask) | **GET** /render_tasks/{render_task_id} | Get Render Task
[**renderTaskResults**](RenderTaskApi.md#renderTaskResults) | **GET** /render_tasks/{render_task_id}/results | Render Task Results


# **createDashboardRenderTask**
> \Looker\Model\RenderTask createDashboardRenderTask($dashboard_id, $result_format, $body, $width, $height, $fields)

Create Dashboard Render Task

### Create a new task to render a dashboard to a document or image.  Returns a render task object. To check the status of a render task, pass the render_task.id to [Get Render Task](#!/RenderTask/get_render_task). Once the render task is complete, you can download the resulting document or image using [Get Render Task Results](#!/RenderTask/get_render_task_results).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Looker\Api\RenderTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dashboard_id = 789; // int | Id of dashboard to render
$result_format = "result_format_example"; // string | Output type: pdf, png, or jpg
$body = new \Looker\Model\CreateDashboardRenderTask(); // \Looker\Model\CreateDashboardRenderTask | Dashboard render task parameters
$width = 789; // int | Output width in pixels
$height = 789; // int | Output height in pixels
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->createDashboardRenderTask($dashboard_id, $result_format, $body, $width, $height, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RenderTaskApi->createDashboardRenderTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dashboard_id** | **int**| Id of dashboard to render |
 **result_format** | **string**| Output type: pdf, png, or jpg |
 **body** | [**\Looker\Model\CreateDashboardRenderTask**](../Model/CreateDashboardRenderTask.md)| Dashboard render task parameters |
 **width** | **int**| Output width in pixels |
 **height** | **int**| Output height in pixels |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Looker\Model\RenderTask**](../Model/RenderTask.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLookRenderTask**
> \Looker\Model\RenderTask createLookRenderTask($look_id, $result_format, $width, $height, $fields)

Create Look Render Task

### Create a new task to render a look to an image.  Returns a render task object. To check the status of a render task, pass the render_task.id to [Get Render Task](#!/RenderTask/get_render_task). Once the render task is complete, you can download the resulting document or image using [Get Render Task Results](#!/RenderTask/get_render_task_results).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Looker\Api\RenderTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$look_id = 789; // int | Id of look to render
$result_format = "result_format_example"; // string | Output type: png, or jpg
$width = 789; // int | Output width in pixels
$height = 789; // int | Output height in pixels
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->createLookRenderTask($look_id, $result_format, $width, $height, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RenderTaskApi->createLookRenderTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **look_id** | **int**| Id of look to render |
 **result_format** | **string**| Output type: png, or jpg |
 **width** | **int**| Output width in pixels |
 **height** | **int**| Output height in pixels |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Looker\Model\RenderTask**](../Model/RenderTask.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLookmlDashboardRenderTask**
> \Looker\Model\RenderTask createLookmlDashboardRenderTask($dashboard_id, $result_format, $body, $width, $height, $fields)

Create Lookml Dashboard Render Task

### Create a new task to render a lookml dashboard to a document or image.  Returns a render task object. To check the status of a render task, pass the render_task.id to [Get Render Task](#!/RenderTask/get_render_task). Once the render task is complete, you can download the resulting document or image using [Get Render Task Results](#!/RenderTask/get_render_task_results).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Looker\Api\RenderTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dashboard_id = "dashboard_id_example"; // string | Id of lookml dashboard to render
$result_format = "result_format_example"; // string | Output type: pdf, png, or jpg
$body = new \Looker\Model\CreateDashboardRenderTask(); // \Looker\Model\CreateDashboardRenderTask | Dashboard render task parameters
$width = 789; // int | Output width in pixels
$height = 789; // int | Output height in pixels
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->createLookmlDashboardRenderTask($dashboard_id, $result_format, $body, $width, $height, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RenderTaskApi->createLookmlDashboardRenderTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dashboard_id** | **string**| Id of lookml dashboard to render |
 **result_format** | **string**| Output type: pdf, png, or jpg |
 **body** | [**\Looker\Model\CreateDashboardRenderTask**](../Model/CreateDashboardRenderTask.md)| Dashboard render task parameters |
 **width** | **int**| Output width in pixels |
 **height** | **int**| Output height in pixels |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Looker\Model\RenderTask**](../Model/RenderTask.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createQueryRenderTask**
> \Looker\Model\RenderTask createQueryRenderTask($query_id, $result_format, $width, $height, $fields)

Create Query Render Task

### Create a new task to render an existing query to an image.  Returns a render task object. To check the status of a render task, pass the render_task.id to [Get Render Task](#!/RenderTask/get_render_task). Once the render task is complete, you can download the resulting document or image using [Get Render Task Results](#!/RenderTask/get_render_task_results).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Looker\Api\RenderTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$query_id = 789; // int | Id of the query to render
$result_format = "result_format_example"; // string | Output type: png or jpg
$width = 789; // int | Output width in pixels
$height = 789; // int | Output height in pixels
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->createQueryRenderTask($query_id, $result_format, $width, $height, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RenderTaskApi->createQueryRenderTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query_id** | **int**| Id of the query to render |
 **result_format** | **string**| Output type: png or jpg |
 **width** | **int**| Output width in pixels |
 **height** | **int**| Output height in pixels |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Looker\Model\RenderTask**](../Model/RenderTask.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **renderTask**
> \Looker\Model\RenderTask renderTask($render_task_id, $fields)

Get Render Task

### Get information about a render task.  Returns a render task object. To check the status of a render task, pass the render_task.id to [Get Render Task](#!/RenderTask/get_render_task). Once the render task is complete, you can download the resulting document or image using [Get Render Task Results](#!/RenderTask/get_render_task_results).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Looker\Api\RenderTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$render_task_id = "render_task_id_example"; // string | Id of render task
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->renderTask($render_task_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RenderTaskApi->renderTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **render_task_id** | **string**| Id of render task |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Looker\Model\RenderTask**](../Model/RenderTask.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **renderTaskResults**
> string renderTaskResults($render_task_id)

Render Task Results

### Get the document or image produced by a completed render task.  Returns `102 Processing` if the render task has not completed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Looker\Api\RenderTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$render_task_id = "render_task_id_example"; // string | Id of render task

try {
    $result = $apiInstance->renderTaskResults($render_task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RenderTaskApi->renderTaskResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **render_task_id** | **string**| Id of render task |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: image/jpeg, image/png, application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

