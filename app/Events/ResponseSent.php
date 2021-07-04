<?php

namespace App\Events;

/**
 * Class ResponseSent
 * @package App\Events
 */
class ResponseSent
{
    public int $code;


    public function __construct(int $code)
    {
        $this->code = $code;
    }
}
