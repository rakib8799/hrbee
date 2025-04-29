<?php

namespace App\Services\Core;

use Exception;

class HelperService
{
    public static function captureException(Exception $e)
    {
        \Sentry\captureException($e);
    }
}