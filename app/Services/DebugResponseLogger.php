<?php


namespace App\Services;


use App\Events\ResponseSent;
use Illuminate\Http\Response;


class DebugResponseLogger extends AbstractResponseLogger
{


    protected function extractResponseData(Response $response): array
    {
        return[
          'date'=>$response->getDate()->format(DATE_ATOM),
          'code'=>$response->getStatusCode()
        ];
    }

    protected function handleFinishedRequestEvent(Response $response): void
    {
        $this->dispatcher->dispatch(new ResponseSent($response->getStatusCode()));
    }
}
