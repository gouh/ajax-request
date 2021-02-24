<?php

declare(strict_types=1);

use Mezzio\Application;
use Mezzio\MiddlewareFactory;
use Psr\Container\ContainerInterface;


/**
 * @param Application $app
 * @param MiddlewareFactory $factory
 * @param ContainerInterface $container
 */
return static function (Application $app, MiddlewareFactory $factory, ContainerInterface $container): void {
    $app->post('/car', App\Handler\CarHandler::class, 'car');
};
