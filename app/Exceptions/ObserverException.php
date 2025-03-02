<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ObserverException extends Exception
{
    public function __construct(string $message = '', int $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
