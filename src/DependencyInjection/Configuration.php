<?php
namespace STS\CalcBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface as ConfigurationInterfaceAlias;

class Configuration implements ConfigurationInterfaceAlias
{
    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder();
        $builder->root('sts-calc');
        return $builder;
    }
}