<?php

namespace ValueObjects;

/**
 * Class ValueObject
 * Generic Base class where all the other extend.
 * @package ValueObjects
 */
class ValueObject
{
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function __toString()
    {
        return (string) $this->value;
    }
}
