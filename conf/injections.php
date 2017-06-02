<?php

return [
    'patternfly\contracts\repository\\*RepositoryInterface' => function (\DI\Container $c, \DI\Factory\RequestedEntry $entry) {
        $persistence = "maestro";
        if ($persistence == 'maestro') {
            $name = $entry->getName();
            $reflection = new ReflectionClass($name);
            $shortName = $reflection->getShortName();
            $class = "pattern\\persistence\\maestro\\repositories\\" . str_replace("Interface", '', $shortName);
            return new $class();
        } else {
            //return new $class;
        }
    },
    'patternfly\services\\*' => function (\DI\Container $c, \DI\Factory\RequestedEntry $entry) {
        $class = $entry->getName();
        $reflection = new ReflectionClass($class);
        $params = $reflection->getConstructor()->getParameters();
        $constructor = array();
        foreach ($params as $param) {
            $constructor[] = $c->get($param->getClass()->getName());
        }
        return new $class(...$constructor);
    },
    'patternfly\controllers\\*' => function (\DI\Container $c, \DI\Factory\RequestedEntry $entry) {
        $class = $entry->getName();
        $controller = new $class();
        return $controller;
    }

];