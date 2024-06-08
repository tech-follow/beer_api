<?php

use App\Infrastructure\Vendor\Symfony\Kernel;

require_once __DIR__.'/../vendor/autoload_runtime.php';

return fn (array $context): Kernel => (
    new Kernel(
        $context['APP_ENV'],
        (bool) $context['APP_DEBUG'],
    )
);
