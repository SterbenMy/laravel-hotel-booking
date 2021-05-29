<?php
namespace App\Services;

use Illuminate\Http\Response;

/**
 * Interface ResponseLoggerInterface
 * @package App\Services
 */
interface ResponseLoggerInterface
{
    /**
     * @param Response $response
     */
    public function logResponse(Response $response): void;
}

