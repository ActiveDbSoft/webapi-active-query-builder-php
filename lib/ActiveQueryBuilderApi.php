<?php
/**
 * ActiveQueryBuilderApi
 * PHP version 5
 *
 * @category Class
 * @package  WebApiActiveQueryBuilder
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * QueryBuilderApi
 *
 * Active Query Builder Web API lets create, analyze and modify SQL queries for different database servers using RESTful HTTP requests to a cloud-based service. It requires SQL execution context (information about database schema and used database server) to be stored under the registered account at https://webapi.activequerybuilder.com/.
 *
 * OpenAPI spec version: 1.1.8
 * Contact: support@activedbsoft.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace WebApiActiveQueryBuilder;

use \WebApiActiveQueryBuilder\Configuration;
use \WebApiActiveQueryBuilder\ApiClient;
use \WebApiActiveQueryBuilder\ApiException;
use \WebApiActiveQueryBuilder\ObjectSerializer;

/**
 * ActiveQueryBuilderApi Class Doc Comment
 *
 * @category Class
 * @package  WebApiActiveQueryBuilder
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActiveQueryBuilderApi
{

    /**
     * API Client
     *
     * @var \WebApiActiveQueryBuilder\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \WebApiActiveQueryBuilder\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\WebApiActiveQueryBuilder\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://webapi.activequerybuilder.com');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \WebApiActiveQueryBuilder\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \WebApiActiveQueryBuilder\ApiClient $apiClient set the API client
     *
     * @return ActiveQueryBuilderApi
     */
    public function setApiClient(\WebApiActiveQueryBuilder\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getQueryColumnsPost
     *
     * 
     *
     * @param \WebApiActiveQueryBuilder\SqlQuery $query Information about SQL query and it&#39;s context. (required)
     * @return \WebApiActiveQueryBuilder\QueryColumn[]
     * @throws \WebApiActiveQueryBuilder\ApiException on non-2xx response
     */
    public function getQueryColumnsPost($query)
    {
        list($response) = $this->getQueryColumnsPostWithHttpInfo($query);
        return $response;
    }

    /**
     * Operation getQueryColumnsPostWithHttpInfo
     *
     * 
     *
     * @param \WebApiActiveQueryBuilder\SqlQuery $query Information about SQL query and it&#39;s context. (required)
     * @return Array of \WebApiActiveQueryBuilder\QueryColumn[], HTTP status code, HTTP response headers (array of strings)
     * @throws \WebApiActiveQueryBuilder\ApiException on non-2xx response
     */
    public function getQueryColumnsPostWithHttpInfo($query)
    {
        // verify the required parameter 'query' is set
        if ($query === null) {
            throw new \InvalidArgumentException('Missing the required parameter $query when calling getQueryColumnsPost');
        }
        // parse inputs
        $resourcePath = "/getQueryColumns";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'text/html'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','text/xml'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($query)) {
            $_tempBody = $query;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\WebApiActiveQueryBuilder\QueryColumn[]',
                '/getQueryColumns'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\WebApiActiveQueryBuilder\QueryColumn[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\WebApiActiveQueryBuilder\QueryColumn[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation transformSQLPost
     *
     * 
     *
     * @param \WebApiActiveQueryBuilder\Transform $transform SQL transformation parameters and commands. (required)
     * @return \WebApiActiveQueryBuilder\TransformResult
     * @throws \WebApiActiveQueryBuilder\ApiException on non-2xx response
     */
    public function transformSQLPost($transform)
    {
        list($response) = $this->transformSQLPostWithHttpInfo($transform);
        return $response;
    }

    /**
     * Operation transformSQLPostWithHttpInfo
     *
     * 
     *
     * @param \WebApiActiveQueryBuilder\Transform $transform SQL transformation parameters and commands. (required)
     * @return Array of \WebApiActiveQueryBuilder\TransformResult, HTTP status code, HTTP response headers (array of strings)
     * @throws \WebApiActiveQueryBuilder\ApiException on non-2xx response
     */
    public function transformSQLPostWithHttpInfo($transform)
    {
        // verify the required parameter 'transform' is set
        if ($transform === null) {
            throw new \InvalidArgumentException('Missing the required parameter $transform when calling transformSQLPost');
        }
        // parse inputs
        $resourcePath = "/transformSQL";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'text/html'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','text/xml'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($transform)) {
            $_tempBody = $transform;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\WebApiActiveQueryBuilder\TransformResult',
                '/transformSQL'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\WebApiActiveQueryBuilder\TransformResult', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\WebApiActiveQueryBuilder\TransformResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
