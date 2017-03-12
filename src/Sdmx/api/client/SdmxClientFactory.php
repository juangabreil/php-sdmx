<?php

namespace Sdmx\api\client;


use Sdmx\api\client\http\RequestHttpClient;
use Sdmx\api\client\rest\query\SdmxRestQueryBuilder;
use Sdmx\api\client\rest\RestSdmxClient;
use Sdmx\api\parser\v21\V21CodelistParser;
use Sdmx\api\parser\v21\V21DataflowParser;
use Sdmx\api\parser\v21\V21DataParser;
use Sdmx\api\parser\v21\V21DataStructureParser;

class SdmxClientFactory
{
    const UIS_URL = 'https://api.uis.unesco.org/sdmx';

    public static function getUisClient($apiKey)
    {
        $codelistParser = new V21CodelistParser();
        $queryBuilder = new SdmxRestQueryBuilder(self::UIS_URL);
        $httpClient = new RequestHttpClient();
        $dataflowParser = new V21DataflowParser();
        $datastructureParser = new V21DataStructureParser($codelistParser);
        $dataParser = new V21DataParser();

        $httpClient->setPredefinedHeaders(array('Ocp-Apim-Subscription-key' => $apiKey));

        $client = new RestSdmxClient('UIS', $queryBuilder, $httpClient, $dataflowParser, $datastructureParser, $codelistParser, $dataParser);

        return $client;
    }
}