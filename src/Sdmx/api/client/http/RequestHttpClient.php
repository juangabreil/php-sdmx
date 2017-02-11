<?php

namespace Sdmx\api\client\http;


use Requests;

class RequestHttpClient implements HttpClient
{
    /**
     * @param string $url
     * @param array $headers
     * @param array $options
     * @return string
     */
    public function get($url, $headers = array('Accept' => 'application/xml', 'Accept-Encoding' => 'gzip'), $options = array())
    {
        $response =  Requests::get($url, $headers, $options);

        return $response->body;
    }
}