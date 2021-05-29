<?php

namespace App\Http\Middleware;

use App\Services\RequestLoggerInterface;
use App\Services\ResponseLoggerInterface;
use Closure;
use Illuminate\Http\Request;

class LoggingMiddleware
{
    private RequestLoggerInterface $requestLogger;
    private ResponseLoggerInterface $responseLogger;

    public function __construct(RequestLoggerInterface $requestLogger,ResponseLoggerInterface $responseLogger)
    {
        $this->requestLogger = $requestLogger;
        $this->responseLogger = $responseLogger;
    }

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $this->requestLogger->logRequest($request);
        $response= $next($request);

        $this->responseLogger->logResponse($response);

        return $response;
    }
}
