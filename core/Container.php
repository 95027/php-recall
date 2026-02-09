<?php

namespace Core;

use ReflectionClass;

class Container
{
    public function resolve(string $class)
    {
        $reflection = new ReflectionClass($class);

        if (!$reflection->isInstantiable()) {
            throw new \Exception("Class {$class} is not instantiable");
        }

        $constructor = $reflection->getConstructor();

        if (!$constructor) {
            return new $class;
        }

        $dependencies = [];

        foreach ($constructor->getParameters() as $param) {
            $type = $param->getType();

            if (!$type) {
                throw new \Exception("Cannot resolve dependency");
            }

            $dependencies[] = $this->resolve($type->getName());
        }

        return $reflection->newInstanceArgs($dependencies);
    }
}
