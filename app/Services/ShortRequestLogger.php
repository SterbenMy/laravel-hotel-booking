<?php

namespace App\Services;

use Illuminate\Http\Request;

class ShortRequestLogger extends AbstractRequestLogger
{
    protected function extractRequestData(Request $request): array
    {
        return [
            'URI' => $request->getUri()
        ];
    }
}
