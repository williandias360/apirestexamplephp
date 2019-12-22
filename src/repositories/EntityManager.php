<?php

require_once "../../vendor/autoload.php";

class EntityManager
{
    use Doctrine\ORM\Tools\Setup;
    use Doctrine\ORM\EntityManager;
    private $paths = [];
    private $isDevMode = false;
    private $dbParams = [];

    public function __construct($property)
    {
        $paths = [
            "../entities"
        ];

        $dbParams = [
            "driver"   => "pdo_mysql",
            "user"     => "root",
            "password" => "",
            "dbname"   => "foo"
        ];
    }
}
