<?php

namespace AlessandroDiPierro\BitlyApiBundle\DependencyInjection\Factory;

use PHPLicengine\Api\Api;
use PHPLicengine\Exception\CurlException;
use PHPLicengine\Service\Bitlink;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ApiFactory
{
    /**
     * @param array $config
     * @return Bitlink
     * @throws CurlException
     */
    public function createBitlink(array $config = [])
    {
        $api = new Api($config['api_key']);
        return new Bitlink($api);
    }
}