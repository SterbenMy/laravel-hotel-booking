<?php


namespace App\Services;


use Illuminate\Http\Request;


class FirstRequestLogger extends AbstractRequestLogger
{
    protected function extractRequestData(Request $request): array
    {
        return [
            'URI' => $request->getUri()
        ];
    }
}
