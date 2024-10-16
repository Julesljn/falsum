<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class GeminiServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'gemini-service';
    }
}
