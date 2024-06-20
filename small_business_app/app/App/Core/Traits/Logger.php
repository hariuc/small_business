<?php

namespace App\App\Core\Traits;

use Illuminate\Support\Facades\Log;

trait Logger
{

    /**
     * @param string $message
     * @return void
    */
    public function info(string $message): void
    {
        Log::info($message);
    }

    /**
     * @param string $message
     * @return void
     */
    public function error(string $message): void
    {
        Log::error($message);
    }

    /**
     * @param string $message
     * @return void
     */
    public function warning(string $message): void
    {
        Log::warning($message);
    }
}
