<?php

namespace DB;

class Entity
{
    protected static $instance = NULL;

    public static function getEntityManager()
    {
        require_once 'conf/doctrine.php';
	    if (!isset(static::$instance))
	       static::$instance = $entityManager;
	    return static::$instance;
    }
}
