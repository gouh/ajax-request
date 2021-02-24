<?php

namespace App\Repository;

use PDO;

/**
 * Class CarRepository
 * @package App\Repository
 *
 * @author hangouh <hugohv10@gmail.com>
 */
class CarRepository
{

    /**
     * @var PDO
     */
    private PDO $connection;

    /**
     * CarRepository constructor.
     * @param PDO $connection
     */
    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    /**
     * Get elements by criteria of match
     * @param array $criteria
     * @return array
     */
    public function findBy(array $criteria): array
    {
        if (!sizeof($criteria)) {
            return [];
        }

        # Get columns like
        $columns = array_map(function($element) {
            return "{$element} like ?";
        }, array_keys($criteria));
        $columns = join(' OR ', $columns);

        # Get column values
        $columnValues = array_map(function($element) {
            return "%{$element}%";
        }, array_values($criteria));

        # Execute query
        $query = $this->connection->prepare("SELECT * FROM cars WHERE {$columns}");
        $query->execute($columnValues);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}