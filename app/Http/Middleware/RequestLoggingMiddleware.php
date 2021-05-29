<?php

namespace App\Http\Middleware;

use App\Services\RequestLoggerInterface;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RequestLoggingMiddleware
{
    private RequestLoggerInterface $requestLogger;

    public function __construct(RequestLoggerInterface $requestLogger)
    {
        $this->requestLogger = $requestLogger;
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
        if(app()->environment('local')){
            $log = [
                'METHOD' => $request->getMethod(),
                'REQUEST_BODY' => $request->all()
            ];
            Log::info(json_encode($log));
        }
        return $next($request);
    }
}
