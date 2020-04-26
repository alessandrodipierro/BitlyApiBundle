<?php

namespace AlessandroDiPierro\BitlyApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * @inheritDoc
     */
    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder('bitly_api');
        $rootNode = \method_exists($builder, 'getRootNode') ? $builder->getRootNode() : $builder->root('bitly_api');

        $rootNode
            ->children()
            ->scalarNode('api_key')->isRequired()->end()
            ;

        return $builder;
    }
}