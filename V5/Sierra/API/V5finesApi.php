<?php
/**
 * V5finesApi
 * PHP version 5
 *
 * @category Class
 * @package  III\Sierra\V5
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 5
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: unset
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace III\Sierra\V5\API;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use III\Sierra\V5\ApiException;
use III\Sierra\V5\Configuration;
use III\Sierra\V5\HeaderSelector;
use III\Sierra\V5\ObjectSerializer;

/**
 * V5finesApi Class Doc Comment
 *
 * @category Class
 * @package  III\Sierra\V5
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V5finesApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getAListOfFines
     *
     * Get a list of fines
     *
     * @param  int $limit the maximum number of results (optional)
     * @param  int $offset the beginning record (zero-indexed) of the result set returned (optional)
     * @param  string[] $id a comma-delimited list of IDs of fine records to retrieve (optional)
     * @param  string[] $fields a comma-delimited list of fields to retrieve (optional)
     * @param  \DateTime $assessedDate the assessed date of fines to retrieve (can be a range) (optional)
     * @param  int[] $agencyCodes fine data for the specified agencies is returned (optional)
     * @param string $acceptHeaderMimeType Optional accept header mime type
     *
     * @throws \III\Sierra\V5\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \III\Sierra\V5\Models\FineResultSet
     */
    public function getAListOfFines($limit = null, $offset = null, $id = null, $fields = null, $assessedDate = null, $agencyCodes = null, $acceptHeaderMimeType='')
    {
        $this->headerSelector->setAcceptHeaderMimeType($acceptHeaderMimeType);
        list($response) = $this->getAListOfFinesWithHttpInfo($limit, $offset, $id, $fields, $assessedDate, $agencyCodes);
        return $response;
    }

    /**
     * Operation getAListOfFinesWithHttpInfo
     *
     * Get a list of fines
     *
     * @param  int $limit the maximum number of results (optional)
     * @param  int $offset the beginning record (zero-indexed) of the result set returned (optional)
     * @param  string[] $id a comma-delimited list of IDs of fine records to retrieve (optional)
     * @param  string[] $fields a comma-delimited list of fields to retrieve (optional)
     * @param  \DateTime $assessedDate the assessed date of fines to retrieve (can be a range) (optional)
     * @param  int[] $agencyCodes fine data for the specified agencies is returned (optional)
     *
     * @throws \III\Sierra\V5\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \III\Sierra\V5\Models\FineResultSet, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAListOfFinesWithHttpInfo($limit = null, $offset = null, $id = null, $fields = null, $assessedDate = null, $agencyCodes = null)
    {
        $returnType = '\III\Sierra\V5\Models\FineResultSet';
        $request = $this->getAListOfFinesRequest($limit, $offset, $id, $fields, $assessedDate, $agencyCodes);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\III\Sierra\V5\Models\FineResultSet',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAListOfFinesAsync
     *
     * Get a list of fines
     *
     * @param  int $limit the maximum number of results (optional)
     * @param  int $offset the beginning record (zero-indexed) of the result set returned (optional)
     * @param  string[] $id a comma-delimited list of IDs of fine records to retrieve (optional)
     * @param  string[] $fields a comma-delimited list of fields to retrieve (optional)
     * @param  \DateTime $assessedDate the assessed date of fines to retrieve (can be a range) (optional)
     * @param  int[] $agencyCodes fine data for the specified agencies is returned (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAListOfFinesAsync($limit = null, $offset = null, $id = null, $fields = null, $assessedDate = null, $agencyCodes = null)
    {
        return $this->getAListOfFinesAsyncWithHttpInfo($limit, $offset, $id, $fields, $assessedDate, $agencyCodes)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAListOfFinesAsyncWithHttpInfo
     *
     * Get a list of fines
     *
     * @param  int $limit the maximum number of results (optional)
     * @param  int $offset the beginning record (zero-indexed) of the result set returned (optional)
     * @param  string[] $id a comma-delimited list of IDs of fine records to retrieve (optional)
     * @param  string[] $fields a comma-delimited list of fields to retrieve (optional)
     * @param  \DateTime $assessedDate the assessed date of fines to retrieve (can be a range) (optional)
     * @param  int[] $agencyCodes fine data for the specified agencies is returned (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAListOfFinesAsyncWithHttpInfo($limit = null, $offset = null, $id = null, $fields = null, $assessedDate = null, $agencyCodes = null)
    {
        $returnType = '\III\Sierra\V5\Models\FineResultSet';
        $request = $this->getAListOfFinesRequest($limit, $offset, $id, $fields, $assessedDate, $agencyCodes);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
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
     * Create request for operation 'getAListOfFines'
     *
     * @param  int $limit the maximum number of results (optional)
     * @param  int $offset the beginning record (zero-indexed) of the result set returned (optional)
     * @param  string[] $id a comma-delimited list of IDs of fine records to retrieve (optional)
     * @param  string[] $fields a comma-delimited list of fields to retrieve (optional)
     * @param  \DateTime $assessedDate the assessed date of fines to retrieve (can be a range) (optional)
     * @param  int[] $agencyCodes fine data for the specified agencies is returned (optional)
     * @param string[] headers any special headers to set - overrides default headers
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAListOfFinesRequest($limit = null, $offset = null, $id = null, $fields = null, $assessedDate = null, $agencyCodes = null, array $headers=[])
    {

        $resourcePath = '/v5/fines/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset);
        }
        // query params
        if (is_array($id)) {
            $id = ObjectSerializer::serializeCollection($id, 'csv', true);
        }
        if ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id);
        }
        // query params
        if (is_array($fields)) {
            $fields = ObjectSerializer::serializeCollection($fields, 'csv', true);
        }
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
        }
        // query params
        if ($assessedDate !== null) {
            $queryParams['assessedDate'] = ObjectSerializer::toQueryValue($assessedDate);
        }
        // query params
        if (is_array($agencyCodes)) {
            $agencyCodes = ObjectSerializer::serializeCollection($agencyCodes, 'csv', true);
        }
        if ($agencyCodes !== null) {
            $queryParams['agencyCodes'] = ObjectSerializer::toQueryValue($agencyCodes);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
                ['application/json', 'application/xml']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
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