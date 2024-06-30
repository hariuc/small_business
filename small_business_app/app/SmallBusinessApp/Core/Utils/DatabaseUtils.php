<?php

namespace App\SmallBusinessApp\Core\Utils;

use Illuminate\Support\Facades\Schema;

class DatabaseUtils
{
    /**
     * @param string $table
     * @param array $except
     * @return array
    */
    public static function getColumnListing(string $table, array $except): array
    {
        $columns = Schema::getColumnListing($table);
        return array_diff($columns, $except);
    }
}
