<?php


namespace App\Factory;


use App\Dao\CarDao;
use App\Dao\CarDaoInterface;
use App\Repository\CarRepository;
use Psr\Container\ContainerInterface;

/**
 * Class CarDaoFactory
 * @package App\Factory
 *
 * @author hangouh <hugohv10@gmail.com>
 */
class CarDaoFactory
{
    /**
     * @param ContainerInterface $container
     * @return CarDaoInterface
     */
    public function __invoke(ContainerInterface $container): CarDaoInterface
    {
        $carRepository = $container->get(CarRepository::class);
        return new CarDao($carRepository);
    }

}