<?php

namespace LightWork\Core;

class BaseCore {
    protected $version = '1.0';
    protected $_config = [];
    function __construct($config = [])
    {
        $this->_config = $config;
    }

    public function __toString()
    {
        return static::class;
    }
}