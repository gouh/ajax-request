<?php


namespace App\Handler;


use App\Dao\CarDaoInterface;
use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * Class CarHandler
 * @package App\Handler
 *
 * @author hangouh <hugohv10@gmail.com>
 */
class CarHandler implements RequestHandlerInterface
{

    /**
     * @var CarDaoInterface
     */
    private CarDaoInterface $carDao;

    public function __construct(CarDaoInterface $carDao)
    {
        $this->carDao = $carDao;
    }

    /**
     * @param ServerRequestInterface $request
     * @return ResponseInterface
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $body = $request->getParsedBody();
        $result = $this->carDao->getCarsLike($body['word']);
        return new JsonResponse($result);
    }
}