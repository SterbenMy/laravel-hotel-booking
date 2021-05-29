<?php

namespace App\Services;


use Illuminate\Events\Dispatcher;
use Illuminate\Http\Response;
use Psr\Log\LoggerInterface;

/**
 * Class AbstractResponseLogger
 * @package App\Services
 */
abstract class AbstractResponseLogger implements ResponseLoggerInterface
{
    private LoggerInterface $logger;
    protected Dispatcher $dispatcher;

    /**
     * AbstractResponseLogger constructor.
     * @param LoggerInterface $logger
     * @param Dispatcher $dispatcher
     */
    public function __construct(LoggerInterface $logger, Dispatcher $dispatcher)
    {
        $this->logger = $logger;
        $this->dispatcher = $dispatcher;
    }


    public function logResponse(Response $response): void
    {
        $this->logger->info(
            $this->generateMessageForResponse($response),
            $this->extractResponseData($response)
        );
        $this->handleFinishedRequestEvent($response);
    }

    /**
     * @param Response $response
     * @return string
     */
    protected function generateMessageForResponse(Response $response): string
    {
        if ($response->isSuccessful()) {
            return 'The response was successful';
        }

        return 'Request could not be processed';

    }

    /**
     * @param Response $response
     * @return array
     */
    abstract protected function extractResponseData(Response $response): array;

    /**
     * @param Response $response
     * @return array
     */
    abstract protected function handleFinishedRequestEvent(Response $response): void;
}
