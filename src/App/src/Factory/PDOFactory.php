<?php

namespace App\Factory;

use PDO;
use PDOException;
use Psr\Container\ContainerInterface;

/**
 * Class PDOFactory
 * @package App\Factory
 *
 * @author hangouh <hugohv10@gmail.com>
 */
class PDOFactory
{
    /**
     * @param ContainerInterface $container
     * @return PDO
     */
    public function __invoke(ContainerInterface $container): PDO
    {
        $config = $container->get('config')['db'];
        $dsn = "{$config['driver']}:host={$config['host']};dbname={$config['dbname']}";
        try {
            return new PDO($dsn, $config['user'], $config['password'], $config['driverOptions']);
        } catch (PDOException $e) {
            error_log($e->getMessage());
            http_response_code(500);
            die($e->getMessage());
        }
    }

}