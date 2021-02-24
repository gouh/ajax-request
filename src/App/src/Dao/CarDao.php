<?php

namespace App\Dao;

use App\Repository\CarRepository;

/**
 * Class CarDao
 * @package App\Dao
 *
 * @author hangouh <hugohv10@gmail.com>
 */
class CarDao implements CarDaoInterface
{

    /**
     * @var CarRepository
     */
    private CarRepository $car;

    public function __construct(CarRepository $car)
    {
        $this->car = $car;
    }

    /**
     * @param string $word
     * @return array
     */
    public function getCarsLike(string $word): array
    {
        $criteria = [
            'model' => $word,
            'maker' => $word
        ];

        return $this->car->findBy($criteria);
    }
}