<?php

namespace App\Services;

use Illuminate\Http\Request;

class LongRequestLogger extends AbstractRequestLogger
{
    protected function extractRequestData(Request $request): array
    {
        return [
            'URI' => $request->getUri(),
            'METHOD' => $request->getMethod(),
            'REQUEST_BODY' => $request->all()
        ];
    }
}
