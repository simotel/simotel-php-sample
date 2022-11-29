<?php

return [
    'smartApi' => [
        'apps' => [
            'sayDate' => "\App\Simotel\SmartApi\SayDateSmartApiApp",
            '*' => "\App\Simotel\SmartApi\SmartApiApp",
        ],
    ],
    'ivrApi' => [
        'apps' => [
            '*' => "\App\Simotel\IvrApiApp",
        ],
    ],
    'trunkApi' => [
        'apps' => [
            '*' => "\App\Simotel\TrunkApiApp",
        ],
    ],
    'extensionApi' => [
        'apps' => [
            '*' => "\App\Simotel\ExtensionApiApp",
        ],
    ],
    'simotelApi' => [
        'api_auth' => 'both',
        'api_user' => 'apiUserName',
        'api_pass' => 'apiPassword',
        'api_key' => 'yourApiToken',
        'server_address' => 'http://serverIpAddress/api/v4/',
    ],
];
