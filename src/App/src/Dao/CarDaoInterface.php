<?php

namespace App\Dao;

/**
 * Interface CarDaoInterface
 * @package App\Dao
 *
 * @author hangouh <hugohv10@gmail.com>
 */
interface CarDaoInterface
{
    /**
     * This method get all cars by word
     *
     * @param string $word
     * @return array
     */
    public function getCarsLike(string $word): array;
}