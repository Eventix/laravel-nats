<?php

namespace Eventix\PubSub;

use Illuminate\Support\Facades\Facade;

class PubSubFacade extends Facade {
    protected static function getFacadeAccessor() {
        return PubSub::class;
    }
}
