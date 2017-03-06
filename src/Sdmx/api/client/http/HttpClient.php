<?php

namespace Sdmx\api\client\http;


interface HttpClient
{
    /**
     * @param string $url
     * @param array $headers
     * @param array $options
     * @return string
     */
    public function get($url, $headers = array('Accept' => 'application/xml', 'Accept-Encoding' => 'gzip'), $options = array());

    /**
     * @param array $headers
     */
    public function setPredefinedHeaders(array $headers);
}