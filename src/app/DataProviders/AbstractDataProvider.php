<?php

namespace EngineLayoutBase\App\DataProviders;


class AbstractDataProvider
{
    public function __get($property)
    {
        if (method_exists($this, $property)) {
            return $this->{$property}();
        }

        throw new \LogicException(
            'Property `'.$property.'` does not exists for this Data Provider'
        );
    }
}