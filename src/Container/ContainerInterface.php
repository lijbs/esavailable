<?php
namespace Lizhenbo\Esavailable\Container;


use Psr\Container\ContainerInterface as BaseContainerInterface;

interface ContainerInterface extends BaseContainerInterface
{
    /**
     * Get the bindings between Extension interfaces and implementations.
     */
    public function getDefinitions();
}