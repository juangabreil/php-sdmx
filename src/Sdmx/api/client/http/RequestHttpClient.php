<?php

namespace Sdmx\api\client\http;


use Requests;

class RequestHttpClient implements HttpClient
{
    /**
     * @var array $predefinedHeaders
     */
    private $predefinedHeaders = array(
        'Accept' => 'application/xml',
        'Accept-Encoding' => 'gzip'
    );

    /**
     * @param string $url
     * @param array $headers
     * @param array $options
     * @return string
     */
    public function get($url, $headers = array(), $options = array())
    {
        $headersToSend = array_merge($this->predefinedHeaders, $headers);
        $response =  Requests::get($url, $headersToSend, $options);

        return $response->success ? $response->body : null;
    }

    /**
     * @param array $headers
     */
    public function setPredefinedHeaders(array $headers)
    {
        $this->predefinedHeaders = $headers;
    }
}