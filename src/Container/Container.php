<?php

namespace Lizhenbo\Esavailable\Container;

class Container implements ContainerInterface
{
    public function getDefinitions()
    {
         var_dump(['hello'=>'world']);
    }

    public function get(string $id)
    {
        // TODO: Implement get() method.
        var_dump("get:".$id);
    }

    public function has(string $id): bool
    {
        // TODO: Implement has() method.
        var_dump("has:".$id);
        return true;
    }
}