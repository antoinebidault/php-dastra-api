<?php
/**
 * WorkFlowsApi
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Dastra API
 *
 * Dastra's public REST API
 *
 * The version of the OpenAPI document: v1
 * Contact: antoine.bidault@dastra.eu
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * WorkFlowsApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WorkFlowsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex)
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation workFlowsFind
     *
     * Get workflows
     *
     * @param  \OpenAPI\Client\Model\WorkFlowType $type type (required)
     * @param  string $tenant_id tenant_id (required)
     * @param  string $workspace_id workspace_id (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function workFlowsFind($type, $tenant_id, $workspace_id)
    {
        $this->workFlowsFindWithHttpInfo($type, $tenant_id, $workspace_id);
    }

    /**
     * Operation workFlowsFindWithHttpInfo
     *
     * Get workflows
     *
     * @param  \OpenAPI\Client\Model\WorkFlowType $type (required)
     * @param  string $tenant_id (required)
     * @param  string $workspace_id (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function workFlowsFindWithHttpInfo($type, $tenant_id, $workspace_id)
    {
        $request = $this->workFlowsFindRequest($type, $tenant_id, $workspace_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation workFlowsFindAsync
     *
     * Get workflows
     *
     * @param  \OpenAPI\Client\Model\WorkFlowType $type (required)
     * @param  string $tenant_id (required)
     * @param  string $workspace_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function workFlowsFindAsync($type, $tenant_id, $workspace_id)
    {
        return $this->workFlowsFindAsyncWithHttpInfo($type, $tenant_id, $workspace_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation workFlowsFindAsyncWithHttpInfo
     *
     * Get workflows
     *
     * @param  \OpenAPI\Client\Model\WorkFlowType $type (required)
     * @param  string $tenant_id (required)
     * @param  string $workspace_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function workFlowsFindAsyncWithHttpInfo($type, $tenant_id, $workspace_id)
    {
        $returnType = '';
        $request = $this->workFlowsFindRequest($type, $tenant_id, $workspace_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'workFlowsFind'
     *
     * @param  \OpenAPI\Client\Model\WorkFlowType $type (required)
     * @param  string $tenant_id (required)
     * @param  string $workspace_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function workFlowsFindRequest($type, $tenant_id, $workspace_id)
    {
        // verify the required parameter 'type' is set
        if ($type === null || (is_array($type) && count($type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $type when calling workFlowsFind'
            );
        }
        // verify the required parameter 'tenant_id' is set
        if ($tenant_id === null || (is_array($tenant_id) && count($tenant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tenant_id when calling workFlowsFind'
            );
        }
        // verify the required parameter 'workspace_id' is set
        if ($workspace_id === null || (is_array($workspace_id) && count($workspace_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $workspace_id when calling workFlowsFind'
            );
        }

        $resourcePath = '/v1/tenant/{tenantId}/ws/{workspaceId}/WorkFlows/{type}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($type !== null) {
            $resourcePath = str_replace(
                '{' . 'type' . '}',
                ObjectSerializer::toPathValue($type),
                $resourcePath
            );
        }
        // path params
        if ($tenant_id !== null) {
            $resourcePath = str_replace(
                '{' . 'tenantId' . '}',
                ObjectSerializer::toPathValue($tenant_id),
                $resourcePath
            );
        }
        // path params
        if ($workspace_id !== null) {
            $resourcePath = str_replace(
                '{' . 'workspaceId' . '}',
                ObjectSerializer::toPathValue($workspace_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation workFlowsList
     *
     * Get the complete
     *
     * @param  string $tenant_id tenant_id (required)
     * @param  string $workspace_id workspace_id (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function workFlowsList($tenant_id, $workspace_id)
    {
        $this->workFlowsListWithHttpInfo($tenant_id, $workspace_id);
    }

    /**
     * Operation workFlowsListWithHttpInfo
     *
     * Get the complete
     *
     * @param  string $tenant_id (required)
     * @param  string $workspace_id (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function workFlowsListWithHttpInfo($tenant_id, $workspace_id)
    {
        $request = $this->workFlowsListRequest($tenant_id, $workspace_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation workFlowsListAsync
     *
     * Get the complete
     *
     * @param  string $tenant_id (required)
     * @param  string $workspace_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function workFlowsListAsync($tenant_id, $workspace_id)
    {
        return $this->workFlowsListAsyncWithHttpInfo($tenant_id, $workspace_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation workFlowsListAsyncWithHttpInfo
     *
     * Get the complete
     *
     * @param  string $tenant_id (required)
     * @param  string $workspace_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function workFlowsListAsyncWithHttpInfo($tenant_id, $workspace_id)
    {
        $returnType = '';
        $request = $this->workFlowsListRequest($tenant_id, $workspace_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'workFlowsList'
     *
     * @param  string $tenant_id (required)
     * @param  string $workspace_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function workFlowsListRequest($tenant_id, $workspace_id)
    {
        // verify the required parameter 'tenant_id' is set
        if ($tenant_id === null || (is_array($tenant_id) && count($tenant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tenant_id when calling workFlowsList'
            );
        }
        // verify the required parameter 'workspace_id' is set
        if ($workspace_id === null || (is_array($workspace_id) && count($workspace_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $workspace_id when calling workFlowsList'
            );
        }

        $resourcePath = '/v1/tenant/{tenantId}/ws/{workspaceId}/WorkFlows';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($tenant_id !== null) {
            $resourcePath = str_replace(
                '{' . 'tenantId' . '}',
                ObjectSerializer::toPathValue($tenant_id),
                $resourcePath
            );
        }
        // path params
        if ($workspace_id !== null) {
            $resourcePath = str_replace(
                '{' . 'workspaceId' . '}',
                ObjectSerializer::toPathValue($workspace_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation workFlowsUpdate
     *
     * Save workflow steps in database
     *
     * @param  string $tenant_id tenant_id (required)
     * @param  string $workspace_id workspace_id (required)
     * @param  \OpenAPI\Client\Model\WorkFlowStepDto[] $work_flow_step_dto work_flow_step_dto (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function workFlowsUpdate($tenant_id, $workspace_id, $work_flow_step_dto = null)
    {
        $this->workFlowsUpdateWithHttpInfo($tenant_id, $workspace_id, $work_flow_step_dto);
    }

    /**
     * Operation workFlowsUpdateWithHttpInfo
     *
     * Save workflow steps in database
     *
     * @param  string $tenant_id (required)
     * @param  string $workspace_id (required)
     * @param  \OpenAPI\Client\Model\WorkFlowStepDto[] $work_flow_step_dto (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function workFlowsUpdateWithHttpInfo($tenant_id, $workspace_id, $work_flow_step_dto = null)
    {
        $request = $this->workFlowsUpdateRequest($tenant_id, $workspace_id, $work_flow_step_dto);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation workFlowsUpdateAsync
     *
     * Save workflow steps in database
     *
     * @param  string $tenant_id (required)
     * @param  string $workspace_id (required)
     * @param  \OpenAPI\Client\Model\WorkFlowStepDto[] $work_flow_step_dto (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function workFlowsUpdateAsync($tenant_id, $workspace_id, $work_flow_step_dto = null)
    {
        return $this->workFlowsUpdateAsyncWithHttpInfo($tenant_id, $workspace_id, $work_flow_step_dto)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation workFlowsUpdateAsyncWithHttpInfo
     *
     * Save workflow steps in database
     *
     * @param  string $tenant_id (required)
     * @param  string $workspace_id (required)
     * @param  \OpenAPI\Client\Model\WorkFlowStepDto[] $work_flow_step_dto (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function workFlowsUpdateAsyncWithHttpInfo($tenant_id, $workspace_id, $work_flow_step_dto = null)
    {
        $returnType = '';
        $request = $this->workFlowsUpdateRequest($tenant_id, $workspace_id, $work_flow_step_dto);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'workFlowsUpdate'
     *
     * @param  string $tenant_id (required)
     * @param  string $workspace_id (required)
     * @param  \OpenAPI\Client\Model\WorkFlowStepDto[] $work_flow_step_dto (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function workFlowsUpdateRequest($tenant_id, $workspace_id, $work_flow_step_dto = null)
    {
        // verify the required parameter 'tenant_id' is set
        if ($tenant_id === null || (is_array($tenant_id) && count($tenant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tenant_id when calling workFlowsUpdate'
            );
        }
        // verify the required parameter 'workspace_id' is set
        if ($workspace_id === null || (is_array($workspace_id) && count($workspace_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $workspace_id when calling workFlowsUpdate'
            );
        }

        $resourcePath = '/v1/tenant/{tenantId}/ws/{workspaceId}/WorkFlows';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($tenant_id !== null) {
            $resourcePath = str_replace(
                '{' . 'tenantId' . '}',
                ObjectSerializer::toPathValue($tenant_id),
                $resourcePath
            );
        }
        // path params
        if ($workspace_id !== null) {
            $resourcePath = str_replace(
                '{' . 'workspaceId' . '}',
                ObjectSerializer::toPathValue($workspace_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']
            );
        }

        // for model (json/xml)
        if (isset($work_flow_step_dto)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($work_flow_step_dto));
            } else {
                $httpBody = $work_flow_step_dto;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
