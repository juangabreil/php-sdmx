<?php

namespace Sdmx\api\client;


use Sdmx\api\client\http\RequestHttpClient;
use Sdmx\api\client\rest\DotStatClient;
use Sdmx\api\client\rest\query\DotStatQueryBuilder;
use Sdmx\api\client\rest\query\SdmxRestQueryBuilder;
use Sdmx\api\client\rest\RestSdmxV21Client;
use Sdmx\api\parser\v20\V20CodelistParser;
use Sdmx\api\parser\v20\V20DataStructureParser;
use Sdmx\api\parser\v21\V21CodelistParser;
use Sdmx\api\parser\v21\V21DataflowParser;
use Sdmx\api\parser\v21\V21DataParser;
use Sdmx\api\parser\v21\V21DataStructureParser;

class SdmxClientFactory
{
    const UIS_URL = 'https://api.uis.unesco.org/sdmx';
    const UIS_SUBSCRIPTION_HEADER_KEY = 'Ocp-Apim-Subscription-key';

    const OECD_URL = 'http://stats.oecd.org/restsdmx/sdmx.ashx';

    public static function getUisClient($apiKey)
    {
        $codelistParser = new V21CodelistParser();
        $queryBuilder = new SdmxRestQueryBuilder(self::UIS_URL);
        $httpClient = new RequestHttpClient();
        $dataflowParser = new V21DataflowParser();
        $datastructureParser = new V21DataStructureParser($codelistParser);
        $dataParser = new V21DataParser();

        $httpClient->setPredefinedHeaders(array(self::UIS_SUBSCRIPTION_HEADER_KEY => $apiKey));

        $client = new RestSdmxV21Client('UIS', $queryBuilder, $httpClient, $dataflowParser, $datastructureParser, $codelistParser, $dataParser);

        return $client;
    }

    public static function getOecdClient()
    {
        $codelistParser = new V20CodelistParser();
        $queryBuilder = new DotStatQueryBuilder(self::OECD_URL, true);
        $httpClient = new RequestHttpClient();
        $datastructureParser = new V20DataStructureParser($codelistParser);
        $dataParser = new V21DataParser();

        $client = new DotStatClient('OECD', $queryBuilder, $httpClient, $datastructureParser, $dataParser);

        return $client;
    }
}