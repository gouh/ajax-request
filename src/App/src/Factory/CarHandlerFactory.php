<?php


namespace App\Factory;


use App\Dao\CarDao;
use App\Handler\CarHandler;
use Psr\Container\ContainerInterface;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * Class CarHandlerFactory
 * @package App\Factory
 *
 * @author hangouh <hugohv10@gmail.com>
 */
class CarHandlerFactory
{
    public function __invoke(ContainerInterface $container): RequestHandlerInterface
    {
        $carDao = $container->get(CarDao::class);
        return new CarHandler($carDao);
    }
}