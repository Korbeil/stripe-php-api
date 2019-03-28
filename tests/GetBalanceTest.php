<?php

namespace Stripe\Test;

use PHPUnit\Framework\TestCase;
use Stripe\Api\Client;
use Stripe\Api\Model\Balance;
use Stripe\ClientFactory;

class GetBalanceTest extends TestCase
{
    /** @var Client */
    private $client;

    protected function setUp(): void
    {
        $this->client = ClientFactory::create(getenv('STRIPE_TOKEN'));
    }

    public function testEndpoint(): void
    {
        $balance = $this->client->getBalance();

        $this->assertInstanceOf(Balance::class, $balance);
        $this->assertGreaterThan(0, $balance->getAvailable());
    }
}
