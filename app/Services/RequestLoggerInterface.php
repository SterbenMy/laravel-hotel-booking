<?php


namespace App\Services;

use Illuminate\Http\Request;

/**
 * Interface RequestLoggerInterface
 * @package App\Services
 */
interface RequestLoggerInterface
{
    public function logRequest(Request $request): void;
}
