<?php

namespace Zaalbarxx\Flash;
use Illuminate\Support\Facades\Facade;

class Flash extends Facade {
    protected static function getFacadeAccessor() { return 'flashmessage'; }
} 