<?php

namespace Mjin\ComposerDemo;

// require 'Predis/Autoloader.php';
// require 'vendor/autoload.php';
// Predis\Autoloader::register();

// Parameters passed using a named array:
use Predis;

class CreateMessage
{
    function createRedisClient() {
        $client = new Predis\Client([
            'scheme' => 'tcp',
            'host'   => '192.168.50.20',
            'port'   => 6379,
        ]);
        return $client;
    }

    function test($key, $value)
    {
        $client = $this->createRedisClient();
        $client->set($key, $value);
        $value = $client->get($key);
        
        echo $value;
        echo "\n";
        echo "\n";
    }
}

