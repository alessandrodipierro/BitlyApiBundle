<?php

namespace AlessandroDiPierro\BitlyApiBundle\Service;

use AlessandroDiPierro\BitlyApiBundle\DependencyInjection\Factory\ApiFactory;
use PHPLicengine\Exception\CurlException;
use PHPLicengine\Service\Bitlink;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Api
{
    private $config;

    public function __construct(ContainerInterface $container)
    {
        $this->config = $container->getParameter('bitly_api.config');
    }

    /**
     * @return Bitlink
     * @throws CurlException
     */
    public function getBitlink()
    {
        $factory = new ApiFactory();
        return $factory->createBitlink($this->config);
    }
}