<?php


namespace App\Services;

use Illuminate\Http\Request;
use Psr\Log\LoggerInterface;

abstract class AbstractRequestLogger implements RequestLoggerInterface
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function logRequest(Request $request): void
    {
        $this->logger->info($this->getMessage(),$this->extractRequestData($request));
    }

    protected function getMessage(): string
    {
        return 'Request processed';
    }

    abstract protected function extractRequestData(Request $request):array;
}

