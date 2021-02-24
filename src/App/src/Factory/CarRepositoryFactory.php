<?php


namespace App\Factory;


use App\Repository\CarRepository;
use PDO;
use Psr\Container\ContainerInterface;

/**
 * Class CarRepositoryFactory
 * @package App\Factory
 *
 * @author hangouh <hugohv10@gmail.com>
 */
class CarRepositoryFactory
{
    public function __invoke(ContainerInterface $container): CarRepository
    {
        $connection = $container->get(PDO::class);
        return new CarRepository($connection);
    }
}