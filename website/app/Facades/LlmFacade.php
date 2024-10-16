<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class LlmFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Llm-service';
    }
}
