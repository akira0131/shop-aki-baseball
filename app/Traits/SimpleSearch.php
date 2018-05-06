<?php

namespace App\Traits;

use Illuminate\Database\PostgresConnection;

trait SimpleSearch
{
    /**
     * @param      $column
     * @param null $query
     * @return mixed
     */
    public function simpleSearchByColumn($column, $query = null)
    {
        if (self::getQuery()->getConnection() instanceof PostgresConnection) {
            return self::whereRaw("{$column}::TEXT ILIKE ?", "%{$query}%");
        }

        return self::where($column, 'LIKE', "%{$query}%");
    }
}
