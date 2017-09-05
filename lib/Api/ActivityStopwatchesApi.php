<?php
/**
 * ActivityStopwatchesApi
 * PHP version 5
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Time
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Time API
 *
 * ConnectWise Time API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: platform@connectwise.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Api;

use \Spinen\ConnectWise\Clients\Time\ApiClient;
use \Spinen\ConnectWise\Clients\Time\ApiException;
use \Spinen\ConnectWise\Clients\Time\Configuration;
use \Spinen\ConnectWise\Clients\Time\ObjectSerializer;

/**
 * ActivityStopwatchesApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Time
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActivityStopwatchesApi
{
    /**
     * API Client
     *
     * @var \Spinen\ConnectWise\Clients\Time\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Spinen\ConnectWise\Clients\Time\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Spinen\ConnectWise\Clients\Time\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Spinen\ConnectWise\Clients\Time\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Spinen\ConnectWise\Clients\Time\ApiClient $apiClient set the API client
     *
     * @return ActivityStopwatchesApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\Time\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation timeActivitystopwatchesCountGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Time API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Time\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\Count
     */
    public function timeActivitystopwatchesCountGet($conditions = null)
    {
        list($response) = $this->timeActivitystopwatchesCountGetWithHttpInfo($conditions);
        return $response;
    }

    /**
     * Operation timeActivitystopwatchesCountGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Time API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Time\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\Count, HTTP status code, HTTP response headers (array of strings)
     */
    public function timeActivitystopwatchesCountGetWithHttpInfo($conditions = null)
    {
        // parse inputs
        $resourcePath = "/time/activitystopwatches/count";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($conditions !== null) {
            $queryParams['conditions'] = $this->apiClient->getSerializer()->toQueryValue($conditions);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\Count',
                '/time/activitystopwatches/count'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\Count', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\Count', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation timeActivitystopwatchesGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Time API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Time\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch[]
     */
    public function timeActivitystopwatchesGet($conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        list($response) = $this->timeActivitystopwatchesGetWithHttpInfo($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
        return $response;
    }

    /**
     * Operation timeActivitystopwatchesGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Time API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Time\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch[], HTTP status code, HTTP response headers (array of strings)
     */
    public function timeActivitystopwatchesGetWithHttpInfo($conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        // parse inputs
        $resourcePath = "/time/activitystopwatches";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($conditions !== null) {
            $queryParams['conditions'] = $this->apiClient->getSerializer()->toQueryValue($conditions);
        }
        // query params
        if ($order_by !== null) {
            $queryParams['orderBy'] = $this->apiClient->getSerializer()->toQueryValue($order_by);
        }
        // query params
        if ($childconditions !== null) {
            $queryParams['childconditions'] = $this->apiClient->getSerializer()->toQueryValue($childconditions);
        }
        // query params
        if ($customfieldconditions !== null) {
            $queryParams['customfieldconditions'] = $this->apiClient->getSerializer()->toQueryValue($customfieldconditions);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['pageSize'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch[]',
                '/time/activitystopwatches'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation timeActivitystopwatchesIdDelete
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Time API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Time\ApiException on non-2xx response
     * @return void
     */
    public function timeActivitystopwatchesIdDelete($id)
    {
        list($response) = $this->timeActivitystopwatchesIdDeleteWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation timeActivitystopwatchesIdDeleteWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Time API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Time\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function timeActivitystopwatchesIdDeleteWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling timeActivitystopwatchesIdDelete');
        }
        // parse inputs
        $resourcePath = "/time/activitystopwatches/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/time/activitystopwatches/{id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation timeActivitystopwatchesIdGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Time API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Time\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch
     */
    public function timeActivitystopwatchesIdGet($id)
    {
        list($response) = $this->timeActivitystopwatchesIdGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation timeActivitystopwatchesIdGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Time API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Time\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch, HTTP status code, HTTP response headers (array of strings)
     */
    public function timeActivitystopwatchesIdGetWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling timeActivitystopwatchesIdGet');
        }
        // parse inputs
        $resourcePath = "/time/activitystopwatches/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch',
                '/time/activitystopwatches/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation timeActivitystopwatchesIdPatch
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Time API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Time\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch
     */
    public function timeActivitystopwatchesIdPatch($id, $operations)
    {
        list($response) = $this->timeActivitystopwatchesIdPatchWithHttpInfo($id, $operations);
        return $response;
    }

    /**
     * Operation timeActivitystopwatchesIdPatchWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Time API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Time\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch, HTTP status code, HTTP response headers (array of strings)
     */
    public function timeActivitystopwatchesIdPatchWithHttpInfo($id, $operations)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling timeActivitystopwatchesIdPatch');
        }
        // verify the required parameter 'operations' is set
        if ($operations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operations when calling timeActivitystopwatchesIdPatch');
        }
        // parse inputs
        $resourcePath = "/time/activitystopwatches/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($operations)) {
            $_tempBody = $operations;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch',
                '/time/activitystopwatches/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation timeActivitystopwatchesIdPut
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Time API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch $activity_stopwatch  (required)
     * @throws \Spinen\ConnectWise\Clients\Time\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch
     */
    public function timeActivitystopwatchesIdPut($id, $activity_stopwatch)
    {
        list($response) = $this->timeActivitystopwatchesIdPutWithHttpInfo($id, $activity_stopwatch);
        return $response;
    }

    /**
     * Operation timeActivitystopwatchesIdPutWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Time API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch $activity_stopwatch  (required)
     * @throws \Spinen\ConnectWise\Clients\Time\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch, HTTP status code, HTTP response headers (array of strings)
     */
    public function timeActivitystopwatchesIdPutWithHttpInfo($id, $activity_stopwatch)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling timeActivitystopwatchesIdPut');
        }
        // verify the required parameter 'activity_stopwatch' is set
        if ($activity_stopwatch === null) {
            throw new \InvalidArgumentException('Missing the required parameter $activity_stopwatch when calling timeActivitystopwatchesIdPut');
        }
        // parse inputs
        $resourcePath = "/time/activitystopwatches/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($activity_stopwatch)) {
            $_tempBody = $activity_stopwatch;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch',
                '/time/activitystopwatches/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation timeActivitystopwatchesPost
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Time API generated by Swagger Code Generator.
     *
     * @param \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch $activity_stopwatch  (required)
     * @throws \Spinen\ConnectWise\Clients\Time\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch
     */
    public function timeActivitystopwatchesPost($activity_stopwatch)
    {
        list($response) = $this->timeActivitystopwatchesPostWithHttpInfo($activity_stopwatch);
        return $response;
    }

    /**
     * Operation timeActivitystopwatchesPostWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Time API generated by Swagger Code Generator.
     *
     * @param \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch $activity_stopwatch  (required)
     * @throws \Spinen\ConnectWise\Clients\Time\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch, HTTP status code, HTTP response headers (array of strings)
     */
    public function timeActivitystopwatchesPostWithHttpInfo($activity_stopwatch)
    {
        // verify the required parameter 'activity_stopwatch' is set
        if ($activity_stopwatch === null) {
            throw new \InvalidArgumentException('Missing the required parameter $activity_stopwatch when calling timeActivitystopwatchesPost');
        }
        // parse inputs
        $resourcePath = "/time/activitystopwatches";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($activity_stopwatch)) {
            $_tempBody = $activity_stopwatch;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch',
                '/time/activitystopwatches'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ActivityStopwatch', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
