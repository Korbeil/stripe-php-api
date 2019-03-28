<?php

namespace Stripe;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\ErrorPlugin;
use Http\Client\Common\Plugin\HeaderAppendPlugin;
use Http\Client\Common\PluginClient;
use Http\Client\HttpClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\Psr17FactoryDiscovery;
use Stripe\Api\Client;

class ClientFactory
{
    public static function create(string $token, HttpClient $httpClient = null): Client
    {
        if (null === $httpClient) {
            $httpClient = HttpClientDiscovery::find();
        }

        $uri = Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.stripe.com');
        $pluginClient = new PluginClient($httpClient, [
            new ErrorPlugin(),
            new AddHostPlugin($uri),
            new HeaderAppendPlugin([
                'Authorization' => sprintf('Bearer %s', $token),
            ]),
        ]);

        return Client::create($pluginClient);
    }
}
